<?php 
// Include Header File
if(file_exists(__DIR__ . '/components/header.php')){
    require_once __DIR__ .'/components/header.php';
}
// Include User Navigation File
if(file_exists(__DIR__ . '/components/user-nav.php')) {
    require_once __DIR__ .'/components/user-nav.php';
}
?>

<!-- Code Cards -->

<section class="code-showcase section">
    <div class="container">
        <div class="section-title">
            <h2>HTML Snippets</h2>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card codecard">
                    <a href="single-snippet.php">
                        <img class="card-img-top" src="http://via.placeholder.com/350x200" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="card codecard">
                    <a href="single-snippet.php">
                        <img class="card-img-top" src="http://via.placeholder.com/350x200" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="card codecard">
                    <a href="single-snippet.php">
                        <img class="card-img-top" src="http://via.placeholder.com/350x200" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="card codecard">
                    <a href="single-snippet.php">
                        <img class="card-img-top" src="http://via.placeholder.com/350x200" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="card codecard">
                    <a href="single-snippet.php">
                        <img class="card-img-top" src="http://via.placeholder.com/350x200" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="card codecard">
                    <a href="single-snippet.php">
                        <img class="card-img-top" src="http://via.placeholder.com/350x200" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>



    
    

<?php 
// Include User Footer
if(file_exists(__DIR__ . '/components/user-footer.php')){
    require_once __DIR__ .'/components/user-footer.php';
}
// include snippet modal
if(file_exists(__DIR__ . '/components/new-snippet-modal.php')){
    require_once __DIR__ .'/components/new-snippet-modal.php';
}
// Include footer File
if(file_exists(__DIR__ . '/components/footer.php')){
    require_once __DIR__ . '/components/footer.php';
}

?>