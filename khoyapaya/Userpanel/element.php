<?php
    require_once('config.php');
    include_once('header.php');
?>
<!DOCTYPE html>
    <html>
    <body>

    <div class="container pd-top-50 mg-top-150">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Title's and List <i class="fa fa-star"></i></h2>
            </div>
            <div class="col-sm-4">
                <h1>This is heading 1</h1>
                <h2>This is heading 2</h2>
                <h3>This is heading 3</h3>
                <h4>This is heading 4</h4>
                <h5>This is heading 5</h5>
                <h6>This is heading 6</h6>
            </div>
            <div class="col-sm-2">
                <h3>Ordered List</h3>
                <ol>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                </ol>
            </div>
            <div class="col-sm-2">
                <h3>Unordered List</h3>
                <ul>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>No List Style</h3>
                <ul class="list-style-none">
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                    <li>List items</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container pd-top-50">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Button Styles <i class="fa fa-star"></i></h2>
                <a class="btn" href="#">Button Style 1</a>
                <a class="btn btn-red" href="#">Button Style 2</a>
            </div>
        </div>
    </div>

    <div class="container pd-top-50">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">Form Fields <i class="fa fa-star"></i></h2>
            </div>
            <div class="col-sm-6 contact-main">
                <form class="contact-form" style="padding: 0" action="#" method="POST">
                    <label class="contact-title" for="name">Input Field</label>
                    <input id="name" class="input" type="text" placeholder="This is input field" />
                    <label class="contact-title" for="message">Text Area</label>
                    <textarea id="message" class="input-message" "name="message rows="7" cols="30" placeholder="This is text area........."></textarea>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="payment mg-top-20">
                    <input name="radioo" id="checkbox1" class="input" type="radio">
                    <label class="payment-title" for="checkbox1">Radio Input 1</label>
                    <input name="radioo" id="checkbox2" class="input" type="radio">
                    <label class="payment-title" for="checkbox2">Radio Input 2</label>
                </div>
                <div class="address-check mg-top-20">
                    <input id="account-check" class="input" type="checkbox">
                    <label class="address-title" for="account-check">Checkbox</label>
                </div>
                <select class="country mg-top-20">
                    <option placeholder="select you country">Select Element</option>
                    <option>USA</option>
                    <option>England</option>
                    <option>Belgium</option>
                    <option>Canada</option>
                </select>
                <br>
                <input type="submit" class="btn mg-top-20" value="Submit Button">
            </div>
        </div>
    </div>

    <div class="container mg-top-50">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="section-title">Accordian <i class="fa fa-star"></i></h2>
                <div id="accordian" class="page-accordian">
                    <h4 class="accordian-title">Lorem Ipsum is simply dummy text of the printing and industry.</h4>
                    <div class="accordian-description">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at College in Virginia, looked up one of the more obscure Latin words.</p>
                    </div>
                    <h4 class="accordian-title">Lorem Ipsum is simply dummy text of the printing and industry.</h4>
                    <div class="accordian-description">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at College in Virginia, looked up one of the more obscure Latin words.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 element product-tabs">
                <h2 class="section-title">Tabs <i class="fa fa-star"></i></h2>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab" aria-expanded="true">Tab 1</a></li>
                    <li role="presentation" class=""><a href="#extra" aria-controls="extra" role="tab" data-toggle="tab" aria-expanded="false">Tab 2</a></li>
                    <li role="presentation" class=""><a href="#review" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Tab 3</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="description">
                        <p>Quisque sollicitudin elit non neque euismod feugiat. Nunc convallis erat at sodales viverra. Vestibulum rutrum eget odio sed maximus diam commodo. Ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="extra">
                        <p>Quisque sollicitudin elit non neque euismod feugiat. Nunc convallis erat at sodales viverra. Vestibulum rutrum eget odio sed maximus diam commodo. Ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="review">
                        <p>Quisque sollicitudin elit non neque euismod feugiat. Nunc convallis erat at sodales viverra. Vestibulum rutrum eget odio sed maximus diam commodo. Ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mg-top-50 mg-bottom-100">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Pagination <i class="fa fa-star"></i></h2>
                <nav class="page-navigation">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</body>


<!-- Mirrored from lineartheme.com/themes/becharity/element.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Nov 2019 12:16:10 GMT -->
</html>
<?php
    include_once('footer.php');
?>
