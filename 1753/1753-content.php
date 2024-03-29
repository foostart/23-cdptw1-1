<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/'.$pattern_document_root.'(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host.$matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1753">
    <div class="container">
        <header class="cd-main-header">
            <a class="cd-logo" href="#0">
                <h3 class="hidden-xs">New/Used Cars</h3>
            </a>

            <ul class="cd-header-buttons">
                <li><a class="cd-search-trigger" href="#cd-search"></a></li>
                <li><a class="cd-nav-trigger" href="#cd-primary-nav">Menu<span></span></a></li>
            </ul> <!-- cd-header-buttons -->
        </header>

        <main class="cd-main-content">
            <!-- your content here -->
            <div class="container">
                <div class="banner-price">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="img/card1.jpg" alt="Card image cap">
                                <button class="btn view-btn">SEDAN</button>
                                <div class="ribbon"><span>Popular</span></div>
                                <h1>Tailored Jeans</h1>
                                <p class="price">$19.99</p>
                                <p>Some text about the jeans..</p>
                                <p><button>Add to Cart</button></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="img/card1.jpg" alt="Card image cap">
                                <button class="btn view-btn">SUV</button>
                                <div class="ribbon"><span>Popular</span></div>
                                <h1>Tailored Jeans</h1>
                                <p class="price">$19.99</p>
                                <p>Some text about the jeans..</p>
                                <p><button>Add to Cart</button></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="img/card1.jpg" alt="Card image cap">
                                <button class="btn view-btn">TRUCK</button>
                                <div class="ribbon"><span>Popular</span></div>
                                <h1>Tailored Jeans</h1>
                                <p class="price">$19.99</p>
                                <p>Some text about the jeans..</p>
                                <p><button>Add to Cart</button></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="img/card1.jpg" alt="Card image cap">
                                <button class="btn btn-danger view-btn">HATCHBACK</button>
                                <div class="ribbon">
                                    <span>Popular</span>
                                </div>
                                <h1>Tailored Jeans</h1>
                                <p class="price">$19.99</p>
                                <p>Some text about the jeans..</p>
                                <p><button>Add to Cart</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-price">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="img/card1.jpg" alt="Card image cap">
                                <button class="btn view-btn">SEDAN</button>
                                <div class="ribbon"><span>Popular</span></div>
                                <h1>Tailored Jeans</h1>
                                <p class="price">$19.99</p>
                                <p>Some text about the jeans..</p>
                                <p><button>Add to Cart</button></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="img/card1.jpg" alt="Card image cap">
                                <button class="btn view-btn">SUV</button>
                                <div class="ribbon"><span>Popular</span></div>
                                <h1>Tailored Jeans</h1>
                                <p class="price">$19.99</p>
                                <p>Some text about the jeans..</p>
                                <p><button>Add to Cart</button></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="img/card1.jpg" alt="Card image cap">
                                <button class="btn view-btn">TRUCK</button>
                                <div class="ribbon"><span>Popular</span></div>
                                <h1>Tailored Jeans</h1>
                                <p class="price">$19.99</p>
                                <p>Some text about the jeans..</p>
                                <p><button>Add to Cart</button></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="img-fluid" src="img/card1.jpg" alt="Card image cap">
                                <button class="btn btn-danger view-btn">HATCHBACK</button>
                                <div class="ribbon">
                                    <span>Popular</span>
                                </div>
                                <h1>Tailored Jeans</h1>
                                <p class="price">$19.99</p>
                                <p>Some text about the jeans..</p>
                                <p><button>Add to Cart</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cd-overlay"></div>
            </div>
        </main>



        <nav class="cd-nav">
            <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
                <li class="has-children">
                    <a href="http://codyhouse.co/?p=409">Clothing</a>

                    <ul class="cd-secondary-nav is-hidden">
                        <li class="go-back"><a href="#0">Menu</a></li>
                        <li class="see-all"><a href="#">All Clothing</a></li>
                        <li class="has-children">
                            <a href="http://codyhouse.co/?p=409">Accessories</a>

                            <ul class="is-hidden">
                                <li class="go-back"><a href="#0">Clothing</a></li>
                                <li class="see-all"><a href="http://codyhouse.co/?p=409">All Accessories</a></li>
                                <li class="has-children">
                                    <a href="#0">Beanies</a>

                                    <ul class="is-hidden">
                                        <li class="go-back"><a href="#0">Accessories</a></li>
                                        <li class="see-all"><a href="http://codyhouse.co/?p=409">All Benies</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Caps &amp; Hats</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Gifts</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Scarves &amp; Snoods</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#0">Caps &amp; Hats</a>

                                    <ul class="is-hidden">
                                        <li class="go-back"><a href="#0">Accessories</a></li>
                                        <li class="see-all"><a href="http://codyhouse.co/?p=409">All Caps &amp; Hats</a>
                                        </li>
                                        <li><a href="http://codyhouse.co/?p=409">Beanies</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Caps</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Hats</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://codyhouse.co/?p=409">Glasses</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Gloves</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Jewellery</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Scarves</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Wallets</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Watches</a></li>
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="http://codyhouse.co/?p=409">Bottoms</a>

                            <ul class="is-hidden">
                                <li class="go-back"><a href="#0">Clothing</a></li>
                                <li class="see-all"><a href="http://codyhouse.co/?p=409">All Bottoms</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Casual Trousers</a></li>
                                <li class="has-children">
                                    <a href="#0">Jeans</a>

                                    <ul class="is-hidden">
                                        <li class="go-back"><a href="#0">Bottoms</a></li>
                                        <li class="see-all"><a href="#">All Jeans</a></li>
                                        <li><a href="#">Ripped</a></li>
                                        <li><a href="">Skinny</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Slim</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Straight</a></li>
                                    </ul>
                                </li>
                                <li><a href="#0">Leggings</a></li>
                                <li><a href="#0">Shorts</a></li>
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="http://codyhouse.co/?p=409">Jackets</a>

                            <ul class="is-hidden">
                                <li class="go-back"><a href="#0">Clothing</a></li>
                                <li class="see-all"><a href="http://codyhouse.co/?p=409">All Jackets</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Blazers</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Bomber jackets</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Denim Jackets</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Duffle Coats</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Leather Jackets</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Parkas</a></li>
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="http://codyhouse.co/?p=409">Tops</a>

                            <ul class="is-hidden">
                                <li class="go-back"><a href="#0">Clothing</a></li>
                                <li class="see-all"><a href="http://codyhouse.co/?p=409">All Tops</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Cardigans</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Coats</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Hoodies &amp; Sweatshirts</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Jumpers</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Polo Shirts</a></li>
                                <li><a href="http://codyhouse.co/?p=409">Shirts</a></li>
                                <li class="has-children">
                                    <a href="#0">T-Shirts</a>

                                    <ul class="is-hidden">
                                        <li class="go-back"><a href="#0">Tops</a></li>
                                        <li class="see-all"><a href="http://codyhouse.co/?p=409">All T-shirts</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Plain</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Print</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Striped</a></li>
                                        <li><a href="http://codyhouse.co/?p=409">Long sleeved</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://codyhouse.co/?p=409">Vests</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-children">
                    <a href="http://codyhouse.co/?p=409">Gallery</a>

                    <ul class="cd-nav-gallery is-hidden">
                        <li class="go-back"><a href="#0">Menu</a></li>
                        <li class="see-all"><a href="http://codyhouse.co/?p=409">Browse Gallery</a></li>
                        <li>
                            <a class="cd-nav-item" href="http://codyhouse.co/?p=409">
                                <img src="img/img.jpg" alt="Product Image">
                                <h3>Product #1</h3>
                            </a>
                        </li>

                        <li>
                            <a class="cd-nav-item" href="http://codyhouse.co/?p=409">
                                <img src="img/img.jpg" alt="Product Image">
                                <h3>Product #2</h3>
                            </a>
                        </li>

                        <li>
                            <a class="cd-nav-item" href="http://codyhouse.co/?p=409">
                                <img src="img/img.jpg" alt="Product Image">
                                <h3>Product #3</h3>
                            </a>
                        </li>

                        <li>
                            <a class="cd-nav-item" href="http://codyhouse.co/?p=409">
                                <img src="img/img.jpg" alt="Product Image">
                                <h3>Product #4</h3>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="has-children">
                    <a href="http://codyhouse.co/?p=409">Services</a>
                    <ul class="cd-nav-icons is-hidden">
                        <li class="go-back"><a href="#0">Menu</a></li>
                        <li class="see-all"><a href="http://codyhouse.co/?p=409">Browse Services</a></li>
                        <li>
                            <a class="cd-nav-item item-1" href="http://codyhouse.co/?p=409">
                                <h3>Service #1</h3>
                                <p>This is the item description</p>
                            </a>
                        </li>

                        <li>
                            <a class="cd-nav-item item-2" href="http://codyhouse.co/?p=409">
                                <h3>Service #2</h3>
                                <p>This is the item description</p>
                            </a>
                        </li>

                        <li>
                            <a class="cd-nav-item item-3" href="http://codyhouse.co/?p=409">
                                <h3>Service #3</h3>
                                <p>This is the item description</p>
                            </a>
                        </li>

                        <li>
                            <a class="cd-nav-item item-4" href="http://codyhouse.co/?p=409">
                                <h3>Service #4</h3>
                                <p>This is the item description</p>
                            </a>
                        </li>

                        <li>
                            <a class="cd-nav-item item-5" href="http://codyhouse.co/?p=409">
                                <h3>Service #5</h3>
                                <p>This is the item description</p>
                            </a>
                        </li>

                        <li>
                            <a class="cd-nav-item item-6" href="http://codyhouse.co/?p=409">
                                <h3>Service #6</h3>
                                <p>This is the item description</p>
                            </a>
                        </li>

                        <li>
                            <a class="cd-nav-item item-7" href="http://codyhouse.co/?p=409">
                                <h3>Service #7</h3>
                                <p>This is the item description</p>
                            </a>
                        </li>

                        <li>
                            <a class="cd-nav-item item-8" href="http://codyhouse.co/?p=409">
                                <h3>Service #8</h3>
                                <p>This is the item description</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li><a href="http://codyhouse.co/?p=409">Standard</a></li>
            </ul> <!-- primary-nav -->
        </nav> <!-- cd-nav -->

        <div id="cd-search" class="cd-search">
            <form>
                <input type="search" placeholder="Search...">
            </form>
        </div>
    </div>
</div>
</div>x