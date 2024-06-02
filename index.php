<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refreshpl</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <nav>
            <div class="nav-container">
                <div><a href="#top">HOME</a></div>
                <div><a href="#offer">OFERTA</a></div>
                <div><a href="#about">O FIRMIE</a></div>
                <div><a href="#pricing">CENNIK</a></div>
                <div><a href="gallery.html">GALERIA</a></div>
                <div><a href="#contact">KONTAKT</a></div>
                <?php if(isset($_SESSION['username'])): ?>
                    <div><a href="logout.php">WYLOGUJ SIĘ</a></div>
                <?php else: ?>
                    <div><a href="login.php">ZALOGUJ SIĘ</a></div>
                <?php endif; ?>
            </div>
        </nav> 
    </div>
    <div class="full-width-image">
        <img src="Pictures/MainWindow.png" alt="Twoje zdjęcie">
        <div class="black-rectangle"></div>
        <div class="image-text">
            <h1>Refreshpl</h1>
            <p>Obklejanie i restauracja</p>
        </div>
    </div>
    <div class="offer-description" id="offer">
        <h2>Oferta</h2>
   </div>
    <div class="icons-container">
        <div class="icon">
            <img src="Pictures/door.jpg" alt="Ikona 1">
            <p>Usługa obklejania drzwi wejściowych różnorodnymi wzorami i kolorami. 
                Folie ochronne zapewniają trwałość i estetyczny wygląd przez długie lata.</p>
        </div>
        <div class="icon">
            <img src="Pictures/furniture.jpg" alt="Ikona 2">
            <p> Transformacja mebli za pomocą różnorodnych wzorów i kolorów. 
                To świetny sposób na odświeżenie wnętrza i nadanie mu osobistego charakteru.</p>
        </div>
        <div class="icon">
            <img src="Pictures/window.jpg" alt="Ikona 3">
            <p> Ożyw wygląd swoich okien i parapetów dzięki naszej profesjonalnej 
                i starannie wykonanej usłudze obklejania różnorodnymi kolorami.</p>
        </div>
        <div class="icon">
            <img src="Pictures/car.jpg" alt="Ikona 4">
            <p> Przywróć blask swojemu samochodowi dzięki usłudze car detailing. 
                Oferujemy obklejanie felg, karoserii oraz inne usługi, które podkreślą jego indywidualny styl.</p>
        </div>
        <div class="big-image">
            <img src="Pictures/zdjGal17.jpg" alt="">
        </div>
     
    </div>
    <div class="brown-rectangle" id="about">
        <div class="border">
            <div class="left-content">
                <img src="Pictures/zdjGal3.jpg" alt="Zdjęcie">
            </div>
            <div class="right-content">
                <h2>O firmie</h2>
                <p>Nasza firma, działająca od 2010 roku, specjalizuje się w profesjonalnym obklejaniu powierzchni 
                    takich jak drzwi wejściowe, meble, okna, parapety oraz samochody. Z pasją i precyzją odmieniamy 
                    wygląd wnętrz i pojazdów, oferując szeroki wybór wzorów i kolorów folii, które zapewniają nie tylko 
                    estetyczny efekt, ale także trwałość na lata. Dzięki naszemu doświadczeniu i zaawansowanym technologiom, 
                    nasze usługi są świadczone na najwyższym poziomie, spełniając oczekiwania nawet najbardziej wymagających klientów. 
                    Współpracujemy zarówno z klientami indywidualnymi, jak i firmami, zapewniając kompleksowe rozwiązania dopasowane do 
                    ich potrzeb i preferencji. Naszym celem jest tworzenie przestrzeni, które odzwierciedlają osobowość i styl 
                    naszych klientów, jednocześnie dbając o ich zadowolenie i satysfakcję z efektów naszej pracy.<p>
            </div>
    
        </div>
    </div>
    <div class="pricing" id="pricing">
        <h2>Cennik</h2>
        <p>Cena naszych usług zależy od wielu czynników. Ceny są orientacyjne. Należy pamiętać, że koszt folii nie jest wliczany w cenę usługi.</p>
        
        <div class="pricing-plans">
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3>Obklejanie drzwi</h3>
                </div>
                <div class="pricing-body">
                    <p>300zł - 600zł</p>
                </div>
            </div>
    
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3>Obklejanie okna</h3>
                </div>
                <div class="pricing-body">
                    <p>150zł - 250zł</p>
                </div>
            </div>
    
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3>Obklejanie parapetu</h3>
                </div>
                <div class="pricing-body">
                    <p>150zł - 200zł</p>
                </div>
            </div>
        </div>
        <div class="pricing-plans">
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3>Dekoracja wnętrza</h3>
                </div>
                <div class="pricing-body">
                    <p>1000zł - 2000 zł</p>
                </div>
            </div>

            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3>Obklejanie felgi</h3>
                </div>
                <div class="pricing-body">
                    <p>200zł - 250zł</p>
                </div>
            </div>

            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3>Element makeover</h3>
                </div>
                <div class="pricing-body">
                    <p>200zł - 500zł</p>
                </div>
            </div>
        </div>
    </div>
    <div class="brown-rectangleContact" id="contact">

        <div class="theme">
            <h2 class="contactH2">KONTAKT</h2>
        </div>
        <div class="contact-info">
            <div class="contact-info-ph">
                <svg xmlns="http://www.w3.org/2000/svg" class = "iconPh" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                  </svg>
                <p>Infolinia</p>
                <p>+48 123 456 789</p>
            </div>
            <div class="contact-info-fb">
                <svg xmlns="http://www.w3.org/2000/svg" class = "iconFb" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                  </svg>
                <p>Facebook</p>
                <p><a href="https://www.facebook.com" target="_blank" class="link">Link</a></p>
            </div>
            <div class="contact-info-ml">
                <svg xmlns="http://www.w3.org/2000/svg" class = "iconMl" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                    <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                </svg>
                <p>Email</p>
                <p>xxx@xxx.com</p>
            </div>
        </div>
        <div class="form-container">
            <form action="contact.php" method="POST">
                <input type="text" name="name" placeholder="Imię i nazwisko">
                <input type="email" name="email" placeholder="Adres email">
                <textarea name="message" placeholder="Wiadomość"></textarea>
                <button type="submit" name="send">Wyślij</button>
            </form>
        </div>
    </div>


    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Refreshpl. Wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>
</body>
</html>
