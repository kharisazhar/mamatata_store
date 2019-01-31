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
            $output .="
                <li class='header-cart-item'>
                    <div class='header-cart-item-txt>
                        <a href='#' class='header-cart-item-name'>
                            ".$items['name']."
                        </a>
                        <span class='header-cart-item-info'>
                            ".$items['qty']." x ".$items['price']."
                        </span>
                    </div>                   
                </li>  
            ";
        }
        $output .= "
            <div class='header-cart-total'>
                Total: Rp. ".$this->cart->total()."
			</div>
            
        ";
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