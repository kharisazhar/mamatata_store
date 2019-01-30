<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_product');
    }
    
    public function add_to_cart() {
        $data = array(
            'id' => $this->input->post('product_id'),
            'name' => $this->input->post('product_name'),
            'image' => $this->input->post('product_image'),
            'price' => $this->input->post('product_price')
        );
        $this->cart->insert($data);
        echo $this->show_cart();
    }

    public function show_cart() {
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items){
            $no++;
            $output .='
                <tr>
                    <td>'.$items['name'].'</td>
                    <td>'.$items['price'].'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">$this->cart->total()</th>
            </tr>
        ';
        return $output;
    }

    public function load_cart() {
        echo $this->show_cart();
    }

    public function hapus_cart() {
        $data = array(
            'rowid' => $this->input->post('row_id'),
            'qty' => 0,
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }
}