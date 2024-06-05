<?php

session_start();

require_once("CreateDb.php");



// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    ///print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'ecommerce.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-COMMERCE WEBSITE</title>
    <link rel="stylesheet" href="estyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .items{
            height: 450px;
        }
    </style>
</head>

<body>
  <header>
    <div class="logo"><a href="#">TRENDHUB</a></div>
    

    <div class="search">
        
      <a href=""><input type="text" placeholder="search products" id="input">
        
      </a>
    </div>
    <div class="heading">
      <ul>
        <li><a href="#" class="under">HOME</a></li>
        <li><a href="login.php" class="under">LOG-IN</a></li>
        <li><a href="registration.php" class="under">REGISTER</a></li>
        <li><a href="#" class="under">CONTACT US</a></li>
        <li><a href="#" class="under">ABOUT US</a></li>
        <li><a href="login.php" class="under">LOGOUT</a></li>
      </ul>
    </div>
    
  </header>
  <section>
    <div class="section">
      <div class="section1">
        <div class="img-slider" style="margin-top: 10px;">
          <img src="https://images.pexels.com/photos/6347888/pexels-photo-6347888.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img">
        </div>
      </div>
      <div class="section2">
        <div class="container">
          <div class="items" style="height: 440px;">
            <div class="img img1"><img src="shoe.jpeg" alt=""></div>
            <div class="name">SHOES</div>
            <div class="price">25$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-regular fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
            
          </div>
          <div class="items" style="height: 440px;">
            <div class="img img2"><img src="tshirt.jpeg" alt=""></div>
            <div class="name">T-SHIRT</div>
            <div class="price">20$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
          <div class="items" style="height: 440px;">
            <div class="img img3"><img src="jeans1.avif" alt=""></div>
            <div class="name">JEANS</div>
            <div class="price">20$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-regular fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
          <div class="items" style="height: 440px;">
            <div class="img img1"><img src="download.jpeg"></div>
            <div class="name">HOODIES</div>
            <div class="price">30$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-regular fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
          <div class="items" style="height: 440px;">
            <div class="img img1"><img src="watch.jpeg" alt=""></div>
            <div class="name">WATCH</div>
            <div class="price">150$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-regular fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
          <div class="items" style="height: 440px;">
            <div class="img img1"><img src="phone.jpeg" alt=""></div>
            <div class="name">SMART PHONE</div>
            <div class="price">500$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
          <div class="items" style="height: 440px;">
            <div class="img img1"><img src="laptop.jpeg" alt=""></div>
            <div class="name">LAPTOP</div>
            <div class="price">400$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
          <div class="items" style="height: 440px;">
            <div class="img img1"><img src="tv.jpeg" alt=""></div>
            <div class="name">TELEVISION</div>
            <div class="price">350$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"><i class="fa-regular fa-star" style="color: #000000;"></i></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
          <div class="items" style="height: 440px;">
            <div class="img img1"><img src="AC.jpeg" alt=""></div>
            <div class="name">AIR CONDITIONER</div>
            <div class="price">250$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-regular fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
          <div class="items" style="height: 440px;">
            <div class="img img1"><img src="wm.png" alt=""></div>
            <div class="name">WASHING MACHINE</div>
            <div class="price">200$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-regular fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
         
          <div class="items" style="height: 440px;">
            <div class="img img1"><img src="book.jpeg" alt=""></div>
            <div class="name">BOOK</div>
            <div class="price">10$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-regular fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
          <div class="items" style="height: 440px;">
            <div class="img img1"><img src="bag.jpeg" alt=""></div>
            <div class="name">BAG</div>
            <div class="price">50$</div>
            <div class="info"><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i></div>
            <div class="cart" style="text-align: center;"><button type="submit" class="btn btn-warning my-3" name="add">ADD TO CART<i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></button></div>
          </div>
          
        </div>

      </div>
    </div>

  </section>
  <footer>
    <div class="footer0">
      <h1>TRENDHUB</h1>
    </div>
    <div class="footer1 ">
      Connect with us at
      <div class="social-media">
        <a href="#">
            <i class="fa-brands fa-square-facebook" style="color: #ffffff;"></i>
        </a>
        <a href="#">
            <i class="fa-brands fa-linkedin" style="color: #ffffff;"></i>
        </a>
        <a href="#">
            <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
        </a>
        <a href="#">
            <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
        </a>
        <a href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </div>
    </div>
    
    <div class="footer3">Copyright © <h4>TRENDHUB</h4></div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>

</html>
    
