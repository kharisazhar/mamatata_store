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

    public function update_cart() {
        $data = array(
            'rowid'      => $this->input->post('row_id'),
            'qty'    => $this->input->post('quantity'),
        );
        $this->cart->update($data);
        echo $this->show_detail_cart();
    }

    public function hapus_cart() {
        $data = array(
            'rowid' => $this->input->post('row_id'),
            'qty' => 0,
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }
    

    public function check_out(){
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items){
            $no++;
            $output .=" 
                ".$items['name']."
                ".$items['qty']."  
                ".$items['price']."
            ";
        }
        $output .= "
            Total: Rp. ".$this->cart->total()."
        ";
        // echo $output;
        $base_url_wa = 'https://wa.me/6289665645475?text=';
        // echo $result;
        redirect($base_url_wa.urlencode($output));
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

    public function show_detail_cart(){
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items){
            $no++;
            $output .="
            <tr class='table-row'>
                <td class='column-1'>
                    <div class='cart-img-product b-rad-4 o-f-hidden'>
                        <img src='<?php echo base_url()?>assets/images/item-10.jpg' alt='IMG-PRODUCT'>
                    </div>
                </td>
                <td class='column-2'>".$items['name']."</td>
                <td class='column-3'>".$items['price']."</td>
                <td class='column-4'>
                    <div class='flex-w bo5 of-hidden w-size17'>
                        <button class='btn-num-product-down color1 flex-c-m size7 bg8 eff2'>
                            <i class='fs-12 fa fa-minus' aria-hidden='true'></i>
                        </button>

                        <input class='quantity size8 m-text18 t-center num-product' id='".$items['id']."' type='number' name='quantity' value='".$items['qty']."' >

                        <button class='update_cart btn-num-product-up color1 flex-c-m size7 bg8 eff2 '>
                            <i class='fs-12 fa fa-plus' aria-hidden='true'></i>
                        </button>
                        
                    </div>
                </td>
                <td class='column-5'> Rp. ".$items['subtotal']."</td>
            </tr>
            ";
        }
        return $output;
    }

    public function load_detail_cart() {
        $this->load->view('v_load_js');
        echo $this->show_detail_cart();        
    }

    public function load_cart() {
        echo $this->show_cart();
    }
}