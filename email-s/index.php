<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Subscriber</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .subscriber-container {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            width: 900px;
            border-radius: 10px;
        }

        .subscriber-container > div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 30px;
        }

        .details-container > img {
            width: 400px;
        }

        .form-container h1 {
            font-weight: bold !important;
        }
    </style>
</head>
<body>


    <div class="main">

        <div class="subscriber-container row">
            <div class="details-container col-6">
                <img src="https://img.freepik.com/free-vector/newsletter-subscription-modern-pastime-online-news-reading-internet-mail-spam-advertisement-phishing-letter-scam-idea-design-element_335657-24.jpg?t=st=1708478647~exp=1708479247~hmac=6156a826a76c7e619ca1989e106119ed3b1826e69c97ae5a3bc3d05a81a704d5" alt="">
            </div>

            <div class="form-container col-6">
                <form action="./send-message.php" method="POST">
                    <h1>Subscribe to our Newsletter!</h1>
                    <div class="form-group">
                        <label for="email">Subcribe to our newsletter to stay update with our latest news and events!  </label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Subscribe -></button>
                </form>
            </div>
        </div>

    </div>
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>