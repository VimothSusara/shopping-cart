<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container">
        <section>
            <!-- enctype specifies how the form-data should be encoded when submitting it to the server(can be 
            used when only the method is post) -->
            <form action="" class="add-product-form" method="post" enctype="multipart/form-data">
                <h3>Add Products</h3>
                <input type="text" name="p_name" placeholder="product name" class="box" required>
                <input type="number" name="p_price" min="0" placeholder="product price" class="box" required>
                <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <input type="submit" value="Add product" name="add_product" class="btn">
            </form>
        </section>
    </div>




    <script src="js/script.js"></script>

</body>

</html>