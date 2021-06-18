<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4cf979829e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Master Kitchen</title>
</head>
<body>
    <header>
        <!-- Εδώ θα μπει το Header -->
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-3 filters">
                <form action="" class="input-filters">
                    <h2 id="filterTitle">ΑΝΑΖΗΤΗΣΗ</h2>
                    <input type="text" class="padding-on-input" placeholder="Αναζήτηση συνταγής">
                    <h4>Φίλτρα:</h4>
                
                    <input type="text" class="padding-on-input" placeholder="Συστατικά που περιλαμβάνονται">
                    <input type="text" class="padding-on-input" placeholder="Συστατικά προς εξαίρεση">
                    <select class="form-select" id="meal">
                        <option value="%" selected>Είδος φαγητού</option>
                        <option value="Breakfast">Πρωινό</option>
                        <option value="Lunch">Μεσημεριανό</option>
                        <option value="Snack">Σνακ</option>
                        <option value="Dinner">Βραδινό</option>
                    </select>
                    <select class="form-select" id="cuisine">
                        <option value="%" selected>Είδος κουζίνας</option>
                        <option value="Asian">Ασιατική κουζίνα</option>
                        <option value="American">Αμερικάνικη κουζίνα</option>
                        <option value="Italian">Ιταλική κουζίνα</option>
                        <option value="British">Αγγλική κουζίνα</option>
                        <option value="Chinese">Κινέζικη κουζίνα</option>
                        <option value="French">Γαλλική κουζίνα</option>
                        <option value="Indian">Ινδική κουζίνα</option>
                    </select>
                    <select class="form-select" id="yield">
                        <option value="%" selected>Βαθμός δυσκολίας</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="form-select" id="diet">
                        <option value="%" selected>Κατηγορία υγείας</option>
                        <option value="Balanced">ισορροπημένη</option>
                        <option value="High-Fiber">υψηλής περιεκτικότητας σε ίνες</option>
                        <option value="High-Protein">υψηλή πρωτείνη</option>
                        <option value="Low-Carb">χαμηλών υδατανθράκων</option>
                        <option value="Low-Fat">χαμηλά λιπαρά</option>
                    </select>
                    <h5>Χρόνος υλοποίησης:</h5>
                    <input type="range" min="0" max="200" value="0" id="myRange">
                    <h4 id="time"></h4>
                    
                    
                    <br>
                    <button class="btn-submit" type="submit">ΑΝΑΖΗΤΗΣΗ</button>
                </form>
                <hr class="hr-text" data-content="Ή">
                <div class="center">
                    <button class="fas fa-microphone btn-microphone talk"></button>
                    <br>
                    
                    <h3 class="content"></h3>
                </div>
            </div>
            <div class="col-md-9">
                <h1 id="results-title">Συνταγές</h1>
                <br>
                <h5>Τα αποτελέσματα που δημιουργήθηκαν σχετικά με την αναζήτηση σας.</h5>
                <div class="search-results">
                    <div class="recipe">
                        
                        <img src="./images/recipe_main_kapnisto_kotopoulo_stithos_-site.jpg" alt="">
                        <div class="flex-container">
                            <h3 class="recipe-title">Όνομα Συνταγής</h3>
                            <button type="button" data-type="heart" class="far fa-heart favorites-icon" title="Προσθήκη στα αγαπημένα"></button>
                            <!-- <a class="view-button" href="#">Δες την συνταγή</a> -->
                        </div>
                        <p class="recipe-data">Είδος φαγητού: Βραδινό</p>
                        <p class="recipe-data">Είδος κουζίνας: Ελληνική κουζίνα</p>
                        <p class="recipe-data">Βαθμός δυσκολίας: 1</p>
                        <p class="recipe-data">Θερμίδες: 85</p>
                        <p class="recipe-data">Χρόνος υλοποίησης: 60'</p>
                    </div>
                    <div class="recipe">                            
                        
                        <img src="./images/recipe_main_kapnisto_kotopoulo_stithos_-site.jpg" alt="">
                        <div class="flex-container">
                            <h3 class="recipe-title">Όνομα Συνταγής</h3>
                            <button type="button" data-type="heart" class="far fa-heart favorites-icon" title="Προσθήκη στα αγαπημένα"></button>
                            <!-- <a class="view-button" href="#">Δες την συνταγή</a> -->
                        </div>
                        <p class="recipe-data">Είδος φαγητού: Βραδινό</p>
                        <p class="recipe-data">Είδος κουζίνας: Ελληνική κουζίνα</p>
                        <p class="recipe-data">Βαθμός δυσκολίας: 1</p>
                        <p class="recipe-data">Θερμίδες: 85</p>
                        <p class="recipe-data">Χρόνος υλοποίησης: 60'</p>
                    </div>
                    <div class="recipe">
                        <img src="./images/recipe_main_kapnisto_kotopoulo_stithos_-site.jpg" alt="">
                        <div class="flex-container">
                            <h3 class="recipe-title">Όνομα Συνταγής</h3>
                            <button type="button" data-type="heart" class="far fa-heart favorites-icon" title="Προσθήκη στα αγαπημένα"></button>
                            <!-- <a class="view-button" href="#">Δες την συνταγή</a> -->
                        </div>
                        <p class="recipe-data">Είδος φαγητού: Βραδινό</p>
                        <p class="recipe-data">Είδος κουζίνας: Ελληνική κουζίνα</p>
                        <p class="recipe-data">Βαθμός δυσκολίας: 1</p>
                        <p class="recipe-data">Θερμίδες: 85</p>
                        <p class="recipe-data">Χρόνος υλοποίησης: 60'</p>
                    </div>
                </div>

                <div class="pagination">
                    <a href="javascript:prevPage()" id="btn_prev">&laquo; Προηγούμενη σελίδα</a>
                    <a href="javascript:nextPage()" id="btn_next">Επόμενη σελίδα &raquo;</a>
                </div>
            </div>
        </div>
    </div>
    


    <footer>
        <!-- Εδώ θα μπει το Footer -->
    </footer>

    <script src="./main.js"></script>
    <script src="./voice.js"></script>
</body>
</html>