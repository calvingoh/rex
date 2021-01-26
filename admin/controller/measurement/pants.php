<?php
class ControllerMeasurementPants extends Controller {
	private $error = array();

	public function index() {

		$this->load->language('measurement/pants');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/pants');

        $this->getList();
        
	}

	public function add() {
		$this->load->language('measurement/pants');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/pants');

		if (($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) ) {
			$this->model_measurement_pants->addPants($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
		

			$this->response->redirect($this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('measurement/pants');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/pants');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_measurement_pants->editPants($this->request->get['pants_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('measurement/pants');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/pants');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $pants_id) {
				$this->model_measurement_pants->deletePants($pants_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
			

			$this->response->redirect($this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'store';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		//breadcrumbs
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['add'] = $this->url->link('measurement/pants/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('measurement/pants/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$this->load->model('setting/store');
		$stores = $this->model_setting_store->getStores();

		$data['pants'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_pants'),
			'limit' => $this->config->get('config_limit_pants')
		);

		$pants_total = $this->model_measurement_pants->getTotalPantss($filter_data);


		$results = $this->model_measurement_pants->getPantss($filter_data);

		foreach ($results as $result) {
			$data['pantss'][] = array(
				'pants_id'         => $result['pants_id'],
				'measurement_id'   => $result['measurement_id'],
				'length'           => $result['length'],
                'bottom'           => $result['bottom'],
                'waist'            => $result['waist'],
                'hip'              => $result['hip'],
                'crotch'           => $result['crotch'],
                'leg'              => $result['leg'],
                'knee'             => $result['knee'],
				'status'		  => ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
				'date_added'	  => $result['date_added'],
				'date_modified'	  => $result['date_modified'],
				'edit'            => $this->url->link('pants/pants/edit', 'user_token=' . $this->session->data['user_token'] . '&measurement_id=' . $result['measurement_id'], true),
			);
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
        }
        
        $data['sort_pants_id'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=pants_id' . $url, true);
		$data['sort_measurement_id'] = $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . '&sort=measurement_id' . $url, true);
		$data['sort_length'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=length' . $url, true);
        $data['sort_bottom'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=bottom' . $url, true);
		$data['sort_waist'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=waist' . $url, true);
		$data['sort_hip'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=hip' . $url, true);
		$data['sort_crotch'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=crotch' . $url, true);
		$data['sort_leg'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=leg' . $url, true);
		$data['sort_knee'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=knee' . $url, true);
		$data['sort_status'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);
		$data['sort_date_added'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=date_added' . $url, true);
		$data['sort_date_modified'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . '&sort=date_modified' . $url, true);

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		
		$pagination->page = $page;
		$pagination->limit = 10;
		$pagination->url = $this->url->link('measurement/pants/history', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();


		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';exit;
		$this->response->setOutput($this->load->view('measurement/pants_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['pants_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
	
		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		//breadcrumbs
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['pants_id'])) {
			$data['action'] = $this->url->link('measurement/pants/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('measurement/pants/edit', 'user_token=' . $this->session->data['user_token'] . '&pants_id=' . $this->request->get['pants_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('measurement/pants', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['pants_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$pants_info = $this->model_measurement_pants->getPants($this->request->get['pants_id']);
		}
		
		if (isset($this->request->post['length'])) {
			$data['length'] = $this->request->post['length'];
		} elseif (!empty($pants_info)) {
			$data['length'] = $pants_info['length'];
		} else {
			$data['length'] = '';
		}

		if (isset($this->request->post['bottom'])) {
			$data['bottom'] = $this->request->post['bottom'];
		} elseif (!empty($pants_info)) {
			$data['bottom'] = $pants_info['bottom'];
		} else {
			$data['bottom'] = '';
        }
        if (isset($this->request->post['waist'])) {
			$data['waist'] = $this->request->post['waist'];
		} elseif (!empty($pants_info)) {
			$data['waist'] = $pants_info['waist'];
		} else {
			$data['waist'] = '';
        }
        if (isset($this->request->post['hip'])) {
			$data['hip'] = $this->request->post['hip'];
		} elseif (!empty($pants_info)) {
			$data['hip'] = $pants_info['hip'];
		} else {
			$data['hip'] = '';
        }
        if (isset($this->request->post['crotch'])) {
			$data['crotch'] = $this->request->post['crotch'];
		} elseif (!empty($pants_info)) {
			$data['crotch'] = $pants_info['crotch'];
		} else {
			$data['crotch'] = '';
        }
        if (isset($this->request->post['leg'])) {
			$data['leg'] = $this->request->post['leg'];
		} elseif (!empty($pants_info)) {
			$data['leg'] = $pants_info['leg'];
		} else {
			$data['leg'] = '';
        }
        if (isset($this->request->post['knee'])) {
			$data['knee'] = $this->request->post['knee'];
		} elseif (!empty($pants_info)) {
			$data['knee'] = $pants_info['knee'];
		} else {
			$data['knee'] = '';
        }
        

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($pants_info)) {
			$data['status'] = $pants_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		// echo '<pre>';
        // print_r($data);
        // echo '</pre>';exit;

		$this->response->setOutput($this->load->view('measurement/pants_add', $data));
	}

	public function validateForm(){
		if (!$this->user->hasPermission('modify', 'measurement/pants')) {
			$this->error['warning'] = $this->language->get('error_permission');
        }
        // echo '<pre>';
        // print_r($this->request->post);
        // echo '</pre>';exit;
        // echo strlen(trim($this->request->post['position_name']));exit;


		// if ((strlen(trim($this->request->post['name'])) < 1) || (strlen(trim($this->request->post['name'])) > 32))  {
		// $this->error['name'] = $this->language->get('error_pants');
		// }
		
		// if ((strlen(trim($this->request->post['username'])) < 1) || (strlen(trim($this->request->post['username'])) > 32))  {
		// 	$this->error['username'] = $this->language->get('error_pants');
		// 	}

		// 	if ((strlen(trim($this->request->post['password'])) < 1) || (strlen(trim($this->request->post['password'])) > 32))  {
		// 		$this->error['password'] = $this->language->get('error_pants');
		// 		}

        // echo '<pre>';
        // print_r($this->error['position_name']);
        // echo '</pre>';exit;

        return !$this->error;
		
	}

	protected function validateDelete(){
		if(!$this->user->hasPermission('modify', 'measurement/pants')){
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
}
}