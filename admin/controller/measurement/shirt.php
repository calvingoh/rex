<?php
class ControllerMeasurementShirt extends Controller {
	private $error = array();

	public function index() {

		$this->load->language('measurement/shirt');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/shirt');

        $this->getList();
        //edit 2
	}

	public function add() {
		$this->load->language('measurement/shirt');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/shirt');

		if (($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) ) {
			$this->model_measurement_shirt->addShirt($this->request->post);

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
		

			$this->response->redirect($this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('measurement/shirt');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/shirt');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_measurement_shirt->editShirt($this->request->get['shirt_id'], $this->request->post);

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

			$this->response->redirect($this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('measurement/shirt');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/shirt');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $shirt_id) {
				$this->model_measurement_shirt->deleteShirt($shirtid);
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
			

			$this->response->redirect($this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . $url, true));
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
			'href' => $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['add'] = $this->url->link('measurement/shirt/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('measurement/shirt/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$this->load->model('setting/store');
		$stores = $this->model_setting_store->getStores();

		$data['shirt'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_shirt'),
			'limit' => $this->config->get('config_limit_shirt')
		);

		$shirttotal = $this->model_measurement_shirt->getTotalShirts($filter_data);


		$results = $this->model_measurement_shirt->getShirts($filter_data);

		foreach ($results as $result) {
			$data['shirts'][] = array(
				'shirt_id'         => $result['shirt_id'],
				'measurement_id'  => $result['measurement_id'],
				'length'          => $result['length'],
                'shoulder'        => $result['shoulder'],
                'cuff_h'          => $result['cuff_h'],
                'cuff_o'          => $result['cuff_o'],
                'chest_f'         => $result['chest_f'],
                'chest_b'         => $result['chest_b'],
                'hip'             => $result['hip'],
                'collar'          => $result['collar'],
				'status'		  => ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
				'date_added'	  => $result['date_added'],
				'date_modified'	  => $result['date_modified'],
				'edit'            => $this->url->link('shirt/shirt/edit', 'user_token=' . $this->session->data['user_token'] . '&shirt_id=' . $result['shirt_id'], true),
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
        
        $data['sort_shirt_id'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=shirt_id' . $url, true);
		$data['sort_measurement_id'] = $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . '&sort=measurement_id' . $url, true);
		$data['sort_length'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=length' . $url, true);
        $data['sort_shoulder'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=shoulder' . $url, true);
		$data['sort_cuff_h'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=cuff_h' . $url, true);
        $data['sort_cuff_o'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=cuff_o' . $url, true);
        $data['sort_chest_f'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=chest_f' . $url, true);
		$data['sort_chest_b'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=chest_b' . $url, true);
        $data['sort_hip'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=hip' . $url, true);
        $data['sort_collar'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=collar' . $url, true);
		$data['sort_status'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);
		$data['sort_date_added'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=date_added' . $url, true);
		$data['sort_date_modified'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . '&sort=date_modified' . $url, true);

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		
		$pagination->page = $page;
		$pagination->limit = 10;
		$pagination->url = $this->url->link('measurement/shirt/history', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();


		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';exit;
		$this->response->setOutput($this->load->view('measurement/shirt_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['shirt_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

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
			'href' => $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['shirt_id'])) {
			$data['action'] = $this->url->link('measurement/shirt/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('measurement/shirt/edit', 'user_token=' . $this->session->data['user_token'] . '&shirt_id=' . $this->request->get['shirt_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('measurement/shirt', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['shirt_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$shirt_info = $this->model_measurement_shirt>getShirt($this->request->get['shirt_id']);
		}
		
		if (isset($this->request->post['length'])) {
			$data['length'] = $this->request->post['length'];
		} elseif (!empty($shirt_info)) {
			$data['length'] = $shirt_info['length'];
		} else {
			$data['length'] = '';
		}

		if (isset($this->request->post['shoulder'])) {
			$data['shoulder'] = $this->request->post['shoulder'];
		} elseif (!empty($shirt_info)) {
			$data['shoulder'] = $shirt_info['shoulder'];
		} else {
			$data['shoulder'] = '';
        }
        if (isset($this->request->post['cuff_h'])) {
			$data['cuff_h'] = $this->request->post['cuff_h'];
		} elseif (!empty($shirt_info)) {
			$data['cuff_h'] = $shirt_info['cuff_h'];
		} else {
			$data['cuff_h'] = '';
        }
        
        if (isset($this->request->post['cuff_o'])) {
			$data['cuff_o'] = $this->request->post['cuff_o'];
		} elseif (!empty($shirt_info)) {
			$data['cuff_o'] = $shirt_info['cuff_o'];
		} else {
			$data['cuff_o'] = '';
        }
        if (isset($this->request->post['chest_f'])) {
			$data['chest_f'] = $this->request->post['chest_f'];
		} elseif (!empty($shirt_info)) {
			$data['chest_f'] = $shirt_info['chest_f'];
		} else {
			$data['chest_f'] = '';
        }
        if (isset($this->request->post['chest_b'])) {
			$data['chest_b'] = $this->request->post['chest_b'];
		} elseif (!empty($shirt_info)) {
			$data['chest_b'] = $shirt_info['chest_b'];
		} else {
			$data['chest_b'] = '';
        }
        if (isset($this->request->post['hip'])) {
			$data['hip'] = $this->request->post['hip'];
		} elseif (!empty($shirt_info)) {
			$data['hip'] = $shirt_info['hip'];
		} else {
			$data['hip'] = '';
        }
        if (isset($this->request->post['collar'])) {
			$data['collar'] = $this->request->post['collar'];
		} elseif (!empty($shirt_info)) {
			$data['collar'] = $shirt_info['collar'];
		} else {
			$data['collar'] = '';
        }
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($shirt_info)) {
			$data['status'] = $shirt_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		// echo '<pre>';
        // print_r($data);
        // echo '</pre>';exit;

		$this->response->setOutput($this->load->view('measurement/shirt_add', $data));
	}

	public function validateForm(){
		if (!$this->user->hasPermission('modify', 'measurement/shirt')) {
			$this->error['warning'] = $this->language->get('error_permission');
        }
        // echo '<pre>';
        // print_r($this->request->post);
        // echo '</pre>';exit;
        // echo strlen(trim($this->request->post['position_name']));exit;


		// if ((strlen(trim($this->request->post['name'])) < 1) || (strlen(trim($this->request->post['name'])) > 32))  {
		// $this->error['name'] = $this->language->get('error_shirt');
		// }
		
		// if ((strlen(trim($this->request->post['username'])) < 1) || (strlen(trim($this->request->post['username'])) > 32))  {
		// 	$this->error['username'] = $this->language->get('error_shirt');
		// 	}

		// 	if ((strlen(trim($this->request->post['password'])) < 1) || (strlen(trim($this->request->post['password'])) > 32))  {
		// 		$this->error['password'] = $this->language->get('error_shirt');
		// 		}

        // echo '<pre>';
        // print_r($this->error['position_name']);
        // echo '</pre>';exit;

        return !$this->error;
		
	}

	protected function validateDelete(){
		if(!$this->user->hasPermission('modify', 'measurement/shirt')){
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
}
}