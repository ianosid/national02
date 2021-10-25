<<<<<<< HEAD
<?php
    include "functions.php";
    $article = new Article(1);
?>;
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Shop/style.css">
    <title>Blogu' National02</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2 text-right">
                                <div>
                                    <h4>
                                        <?php
                                        $date = $article->date;
                                        $timestamp = strtotime ($date);
                                        $newDate = date('d', $timestamp);
                                        echo $newDate;
                                        ?>
                                        <br/>
                                        <?php
                                        $newDate = date('M', $timestamp);
                                        echo $newDate;
                                        ?>
                                    </h4>
                                </div>
                            </div>
                            <?php
                                $article->card();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5 mb-2">
                        <h3>Stiri similare</h3>
                    </div>
                        <?php
                        foreach ( array_slice($article->getCategory()->getArticles(),0,4) as $similarArticle){
                            if ($similarArticle->getId() != $article->getId()){
                                $similarArticle->cardSample();
                            }
                        }
                            ?>
                </div>
            </div>
        </div>
    </div>
=======
<?php
    include "functions.php";
    $article = new Article(1);
?>;
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Shop/style.css">
    <title>Blogu' National02</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2 text-right">
                                <div>
                                    <h4>
                                        <?php
                                        $date = $article->date;
                                        echo $date;
                                        ?>
                                    </h4>
                                </div>
                            </div>
                            <?php
                                $article->card();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5 mb-2">
                        <h3>Stiri similare</h3>
                    </div>
                        <?php
                        foreach ( array_slice($article->getCategory()->getArticles(),0,4) as $similarArticle){
                            if ($similarArticle->getId() != $article->getId()){
                                $similarArticle->cardSample();
                            }
                        }
                            ?>
                </div>
            </div>
        </div>
    </div>
>>>>>>> beb0dd7ac17caec9d142e8cba5a2ac63c6b0ca54
    <?php
    include "parts/footer.php"
    ?>
</body>
