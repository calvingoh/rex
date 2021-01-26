<?php
class ControllerMeasurementMeasurement extends Controller {
	private $error = array();

	public function index() {

		$this->load->language('measurement/measurement');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/measurement');

        $this->getList();
        
	}

	public function add() {
		$this->load->language('measurement/measurement');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/measurement');

		if (($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) ) {			
            // echo'<pre>';print_r($this->request->post);echo'</pre>';exit;
			$this->model_measurement_measurement->addMeasurement($this->request->post);


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
		

			$this->response->redirect($this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('measurement/measurement');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/measurement');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_measurement_measurement->editMeasurement($this->request->get['measurement_id'], $this->request->post);

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

			$this->response->redirect($this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('measurement/measurement');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('measurement/measurement');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $measurement_id) {
				$this->model_measurement_measurement->deleteMeasurement($measurement_id);
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
			

			$this->response->redirect($this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . $url, true));
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
			'href' => $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['add'] = $this->url->link('measurement/measurement/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('measurement/measurement/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$this->load->model('setting/store');
		$stores = $this->model_setting_store->getStores();

		$data['measurements'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_measurement'),
			'limit' => $this->config->get('config_limit_measurement')
		);

		$measurement_total = $this->model_measurement_measurement->getTotalMeasurements($filter_data);


		$results = $this->model_measurement_measurement->getMeasurements($filter_data);

		foreach ($results as $result) {
			$data['measurements'][] = array(
				'measurement_id'  => $result['measurement_id'],
				'name'            => $result['name'],
				'telephone'       => $result['telephone'],
				'status'		  => ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
				'date_added'	  => $result['date_added'],
				'date_modified'	  => $result['date_modified'],
				'edit'            => $this->url->link('measurement/measurement/edit', 'user_token=' . $this->session->data['user_token'] . '&measurement_id=' . $result['measurement_id'], true),
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
		
		$data['sort_measurement_id'] = $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . '&sort=measurement_id' . $url, true);
		$data['sort_name'] = $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
		$data['sort_telephone'] = $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . '&sort=telephone' . $url, true);
		$data['sort_status'] = $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);
		$data['sort_date_added'] = $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . '&sort=date_added' . $url, true);
		$data['sort_date_modified'] = $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . '&sort=date_modified' . $url, true);

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		
		$pagination->page = $page;
		$pagination->limit = 10;
		$pagination->url = $this->url->link('measurement/measurement/history', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();


		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';exit;
		$this->response->setOutput($this->load->view('measurement/measurement_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['measurement_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}
		
		if (isset($this->error['telephone'])) {
			$data['error_telephone'] = $this->error['telephone'];
		} else {
			$data['error_telephone'] = '';
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
			'href' => $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['measurement_id'])) {
			$data['action'] = $this->url->link('measurement/measurement/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('measurement/measurement/edit', 'user_token=' . $this->session->data['user_token'] . '&measurement_id=' . $this->request->get['measurement_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('measurement/measurement', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['measurement_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$measurement_info = $this->model_measurement_measurement->getMeasurement($this->request->get['measurement_id']);
		}
		
		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($measurement_info)) {
			$data['name'] = $measurement_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['telephone'])) {
			$data['telephone'] = $this->request->post['telephone'];
		} elseif (!empty($measurement_info)) {
			$data['telephone'] = $measurement_info['telephone'];
		} else {
			$data['telephone'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($measurement_info)) {
			$data['status'] = $measurement_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		// echo '<pre>';
        // print_r($data);
        // echo '</pre>';exit;

		$this->response->setOutput($this->load->view('measurement/measurement_add', $data));
	}

	public function validateForm(){
		if (!$this->user->hasPermission('modify', 'measurement/measurement')) {
			$this->error['warning'] = $this->language->get('error_permission');
        }
        // echo '<pre>';
        // print_r($this->request->post);
        // echo '</pre>';exit;
        // echo strlen(trim($this->request->post['position_name']));exit;


		if ((strlen(trim($this->request->post['name'])) < 1) || (strlen(trim($this->request->post['name'])) > 32))  {
		$this->error['name'] = $this->language->get('error_measurement');
		}
		
		if ((strlen(trim($this->request->post['telephone'])) < 1) || (strlen(trim($this->request->post['telephone'])) > 32))  {
			$this->error['telephone'] = $this->language->get('error_measurement');
			}

        // echo '<pre>';
        // print_r($this->error['position_name']);
        // echo '</pre>';exit;

        return !$this->error;
		
	}

	protected function validateDelete(){
		if(!$this->user->hasPermission('modify', 'measurement/measurement')){
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
}
}