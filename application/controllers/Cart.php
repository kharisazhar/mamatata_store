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
            'id'      => $this->input->post('product_id'),
            'name'    => $this->input->post('product_name'),
            'price'   => $this->input->post('product_price'),
            'qty'     => $this->input->post('quantity')
            // 'options' => array('Size' => 'L', 'Color' => 'Red')
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
                    <td>'.$items['qty'].'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">'.'Rp '.$this->cart->total().'</th>
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