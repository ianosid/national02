<?php

class Product extends Base
{
    public $name;

    public $price;

    public $description;

    public $discount;


    public static function getTableName()
    {
        return 'products';
    }

    public function getFirstImage()
    {
        $images =$this->getImages();
        if (isset($images[0])){
            return $images[0];
        } else {
            $image = new Image(2);
            $image->file = 'noImage.png';
            return $image;
        }
    }

    public function getPrice()
    {
        $intPart = intval($this->price);

        $floatPart = intval(($this->price-$intPart)*100);

        return "$intPart<sup>$floatPart</sup>";
    }


    public function getImages()
    {
        return ProductImage::findBy('productId', $this->getId());
    }

    public function card()
    {
        $productHTML= '<div class="col-3 ">
            <div class="card text-center px-2">
                <a href="product.php?id='.$this->getId().'"> <img class="card-img-top" src="images/'.$this->getFirstImage()->file.'" alt="'.$this->name.'" style="height: 260px;"></a>
                <div class="card-body">
                    <h5 class="card-title">'.$this->name.'</h5> 
                    <h5 class="oldPrice">
                        <strike>'.$this->getPrice().'</strike> Lei (-'.$this->discount.'%)
                    </h5>
                    ';
        $productHTML.='<a href="addToCart.php?id='.$this->getId().'" class="btn btn-primary mt-2">Adauga in cos</a>';
        $productHTML.='</div>
            </div>
        </div>';
        echo $productHTML;
    }
}