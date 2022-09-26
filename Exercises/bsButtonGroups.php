<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>   
        <div class="container mt-3">
            <h2>BUTTON GROUP</h2>
            <div class="btn-group">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Samsung</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://www.samsung.com/ph/smartphones/galaxy-z-fold2/"> Galaxy Z Fold 2</a></li>
                        <li><a class="dropdown-item" href="https://www.samsung.com/ph/smartphones/galaxy-z-flip3-5g/?cid=ph_paid_ppc_google_q2b2_always-on_none_text_none_none_AG~Warm%20-%20B2ZFlip3%20-%20Product_MK~ph_AT~ta_MD~h_AI~LAUNCH&-adid=562963401350-keyword=galaxy%20flip%203&gclid=CjwKCAiAksyNBhAPEiwAlDBeLEhOPcFuQrdhvp5kVnkT64b8oKZZEW6qr3bB3VPfH7XB9LRqkhchEhoCxBQQAvD_BwE"> Galaxy Z Flip 3</a></li>
                        <li><a class="dropdown-item" href="https://www.samsung.com/ph/smartphones/galaxy-s21-ultra-5g/?cid=ph_paid_ppc_google_s-series_always-on_none_text_none_none_AG~Warm%20-%20S21%20Ultra%20-%20Product_MK~ph_AT~ta_MD~w_AI~&-adid=497470928157-keyword=galaxy%20s21%20ultra&gclid=CjwKCAiAksyNBhAPEiwAlDBeLIpG1GsstphcKxmUFq6Qh2XLUCODR_O7yEzAi5MEo6naa3orR30H5hoCqUwQAvD_BwE"> Galaxy S21 Ultra</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Apple</button>
                <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> Iphone 13 Mini</a></li>
                        <li><a class="dropdown-item" href="#"> Iphone 13</a></li>
                        <li><a class="dropdown-item" href="#"> Iphone 13 Pro</a></li>
                        <li><a class="dropdown-item" href="#"> Iphone 13 Pro Max</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Xiaomi</button>
                <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> POCO M3</a></li>
                        <li><a class="dropdown-item" href="#"> POCO X3 NFC</a></li>
                        <li><a class="dropdown-item" href="#"> Redmi 9</a></li>
                        <li><a class="dropdown-item" href="#"> Mi 10</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <br/>
        <br/>
        <br/>

        <div class="container">
            <h2>VERTICAL BUTTON GROUP</h2>
            <div class="btn-group-vertical">
                <button type="button" class="btn btn-danger">Samsung</button>
                <button type="button" class="btn btn-danger">Apple</button>
                <button type="button" class="btn btn-danger">Xiaomi</button>
            </div>
        </div>

        
    </body>

</html>