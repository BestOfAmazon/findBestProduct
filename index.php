<?php
    include("header.php");
    include("Product.php");
     $pList = array(new Product(1671872,"Green Bottom Wear",850,"https://imgaz1.chiccdn.com/thumb/view/oaupload/ser1/newchic/images/55/60/4da21dba-c700-4337-bd80-640da97dccb5.jpg"));                                
            array_push($pList,new Product(1671874,"N-95 Blue Mask",500,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/2E/72/1c322075-7a7a-474d-976e-6bcbc45daaec.jpg"));
            array_push($pList,new Product(1671875,"90s Cap",350,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/C9/2E/dbb5e404-fcfe-493b-ad96-9e1adf312b80.jpg"));
            array_push($pList,new Product(1671876,"Hand Gloves",200,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/57/8A/70ed0ba8-4163-4537-9f3f-dec22c8f1ddc.jpg"));
            array_push($pList,new Product(1671877,"2 in 1 shirts",550,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/E0/F8/8be94dee-0084-4fd6-ab64-c6b0e9598cbd.jpg"));
            array_push($pList,new Product(1671878,"Green T-shirt",599,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/EC/25/49097abd-7b50-4cda-9604-c98b8eac4664.jpeg"));
            array_push($pList,new Product(1671879,"Protection Blue Cap",499,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/86/34/32269ae0-da4e-49ea-be65-b28cb6ddc484.jpg"));
            array_push($pList,new Product(1671880,"Grey Cap",299,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/64/8E/1993a967-6da8-4d71-83c6-fd40c4dba88f.jpg"));
            array_push($pList,new Product(1671881,"Hand Tattoo Gloves",1599,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/0E/1D/04f51669-0b8b-48bb-a73d-a77dde830d1c.jpg"));
            array_push($pList,new Product(1671882,"Hair Band",199,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/42/72/fb18212c-f622-4bf9-99bb-85fa4decd9e9.jpg"));
            array_push($pList,new Product(1671883,"Eglu Cap",299,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/3A/60/567b9a0a-66e3-4fdb-ad99-4155400c8714.jpg",));
            array_push($pList,new Product(1671884,"Winter Cap",250,"https://imgaz1.chiccdn.com/thumb/view/oaupload/newchic/images/4B/16/1fb6c5f1-7824-49c6-8033-a71528a99200.jpg"));            
    ?>
    <style>
    body {
        background-color: goldenrod;
    }

    .card {
        border-radius: 0px 0px 14px 14px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
        transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
        cursor: pointer;
    }
    .image{
        position:relative;
        display:inline;
    }
    .image img{
        display:block;
    }
    .image i {
        position: absolute;            
        top: 10px;
        right: 15px;
    }
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
</style>
<div class="text-center">
    <div class="container">
        <div class="row">
            <?php
                if (!isset($_COOKIE['Seen']) || $_COOKIE['Seen'] != 'true') {
                    echo '<script>alert("Accept Cookie!!")</script>';
                    setcookie('Seen', 'true');
                }
            ?>
            <?php
            foreach($pList as $pro)
            {                                
            ?>
            <div class="col-sm" style="padding:10px">
                <div class="card" style="width: 18rem;">
                    <div class="image">
                        <?php
                        echo '<img class="card-img-top" src="'.$pro->imageUrl.'" height="300" width="600" alt="Card image cap">';?>
                        <i class="far fa-heart 3x" aria-hidden="true"></i>
                    </div>                    
                    <div class="card-body">
                    <?php
                        echo '<p class="card-text">'.$pro->Name.'</p>';
                        echo '<p class="card-text">Rs. '.$pro->Price.'</p>';?>
                    </div>
            </div>
                </div>
                <?php
            }           ?>
        </div>
    </div>
</div>
<?php
    include("footer.php");
?>