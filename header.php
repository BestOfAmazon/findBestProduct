
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find Best</title>
    <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/site.css" />
    <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet" />
    <style>
        .cookie-overlay {
  position: fixed;
  bottom: 1rem;
  left: 1rem;
  background: #fff;
  z-index: 2051;
  line-height: 20px;
  font-size: 14px;
  border-radius: 6px;

  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);

  > div:first-child {
    width: 458px;
  }

  a {
    text-decoration: underline;
  }

  .close-cookies {
    cursor: pointer;
  }

  .cookie-banner {
  position: fixed;
  bottom: 40px;
  left: 10%;
  right: 10%;
  width: 80%;
  padding: 5px 14px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #eee;
  border-radius: 5px;
  box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
}
.close {
  height: 20px;
  background-color: #777;
  border: none;
  color: white;
  border-radius: 2px;
  cursor: pointer;
}


  media-breakpoint-down(md) {
    bottom: 0;
    left: 0;
    right: 0;
    border-radius: 0;

    > div:first-child {
      width: auto;
    }
  }
}
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-dark border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand text-white" href="index.php">BestOfAmazon</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    
                </div>
            </div>
        </nav>
        <?php
        // if ($_COOKIE['Seen'] == 'true') {echo '<div style="all:none; visibility:hidden; display:none">';}
        // else {
        //        echo '<div id="element_to_pop_up">';
        //         $value = 'true';
        //         $expire = time()+60*60*24;
        //         setcookie('Seen', $value, $expire);
        // }
?>

<!-- <a href="#"class="b-close" style="position:absolute; margin-top:5px; margin-left:550px;"><img src=""></a> -->
    <!-- <iframe frameBorder="0" name="iFrame" width="600" height="500" scrolling="no"></iframe> -->

    </div>
    </header>
    <!-- <div class="container">
        <partial name="_CookieConsentPartial" />
        <main role="main" class="pb-3">
            @RenderBody()
        </main>
    </div> -->

    
