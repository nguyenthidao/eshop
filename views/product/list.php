<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Thế giới máy tính</title>
    <link rel="stylesheet" href="/eshop/assets/css/product.css">
</head>
<body>
<div class="container-fluid">
    <header class="row">
        <div class="col-lg-12 header-top">
            <div class="panel panel-primary">
                <div class="panel-heading">Eshop Manage</div>
            </div>
        </div>
        <div class="col-lg-12 header-bottom">
            <div class="col-lg-2">
                <h3>Hi user name</h3>
            </div>
            <div class="col-lg-10">
                <h3>List products</h3>
            </div>
        </div>
    </header>
    <div class="row">
        <aside class="col-lg-2">
            <div class="row">
                <div class="col-lg-5">
                    <img src="/eshop/assets/images/ninja1.jpg" alt="..." class="img-thumbnail">
                </div>
                <div class="col-lg-7">
                    <div class="col-lg-12">
                        <span class="glyphicon glyphicon-cog"></span>
                        <span>Update profile</span>
                    </div>
                    <div class="col-lg-12">
                        <span class="glyphicon glyphicon-share-alt"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked menu">
                <li role="presentation" class="active"><a href="/eshop/product/listall">Product</a></li>
                <li role="presentation"><a href="/eshop/user/list">User</a></li>
                <li role="presentation"><a href="/eshop/brand/listall">Brand</a></li>
            </ul>
        </aside>
        <section class="col-lg-10">
            <article class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-primary search" name="btn-search">Search</button>
                    </span>
                    </div>
                </div>
            </article>
            <article class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-th-list"></span>
                                    <span>Product Management</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 add-product">
                    <a class="btn btn-primary">Add product</a>
                </div>
                <div class="col-lg-12 table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Quality</th>
                            <th>Ram</th>
                            <th>Key Board</th>
                            <th>Display</th>
                            <th>Hard Drive</th>
                            <th>Wireless</th>
                            <th>Description</th>
                            <th>Brand Name</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($data as $product) :?>
                        <tr>
                            <td><input type="checkbox" name="checkbox"></td>
                            <td><?php echo $product->getName(); ?></td>
                            <td><?php echo $product->getColor(); ?></td>
                            <td><?php echo $product->getPrice(); ?></td>
                            <td><?php echo $product->getQuality(); ?></td>
                            <td><?php echo $product->getRam(); ?></td>
                            <td><?php echo $product->getKeyBoard(); ?></td>
                            <td><?php echo $product->getDisplay(); ?></td>
                            <td><?php echo $product->getHardDrive(); ?></td>
                            <td><?php echo $product->getWireless(); ?></td>
                            <td><?php echo $product->getDescription(); ?></td>
                            <td><?php echo $product->getBrandsId(); ?></td>
                            <td><a class="btn btn-info">Edit</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="col-lg-12">
                    <button class="btn btn-danger">Delete</button>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-10"></div>
                    <nav class="col-lg-2" aria-label="...">
                        <ul class="pagination">
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                            <li><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="#">2 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">5 <span class="sr-only">(current)</span></a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </article>
        </section>
    </div>
    <footer class="row">

    </footer>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>