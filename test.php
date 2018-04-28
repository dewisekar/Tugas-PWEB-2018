<?php include "header.php"; ?>
<div class="quiz-div">
    <div class="about-parallax-bg"></div>
    <div id="q-greet" class="quiz-animateable container">
        <h1 class="quiz-greet">Quiz Time!</h1>
        <button id="quiz-start" class="quiz-mulai quiz-away" onclick="StartQuiz();">Mulai</button><br>
        <input id="q-name" class="quiz-input" type="text" name="username" placeholder="Masukkan Nama Anda!" required><br>
        <span class="quiz-text">*) Semangat Mencoba</span><br>
        
    </div>
    <div id="q-quiz" class="container quiz-animateable quiz-away"></div>
    <div id="soal-1" class="container q-soal quiz-animateable quiz-away">
        <h2 class="quiz-title">Kenapa Ayam Menyebrang Jalan?</h2>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">Untuk sampai kesebrang jalan</button>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">Untuk menjawab quiz ini</button>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">Cari makan</button>
    </div>
    <div id="soal-2" class="container q-soal quiz-animateable quiz-away">
        <h2 class="quiz-title">2 + 2 is ?</h2>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">3</button>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">4</button>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">Quick Math</button>
    </div>
    <div id="soal-3" class="container q-soal quiz-animateable quiz-away">
        <h2 class="quiz-title">Diberikan sebuah Apel</h2>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">Ini Benar</button>
    </div>
    <div id="soal-4" class="container q-soal quiz-animateable quiz-away">
        <h2 class="quiz-title">Anda sedang melakukan apa?</h2>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">Coba Coba</button>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">Mengerjakan</button>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">Belajar Menebak</button>
    </div>
    <div id="soal-5" class="container q-soal quiz-animateable quiz-away">
        <h2 class="quiz-title">Sub domain dari web ini adalah?</h2>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">localhost</button>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">net</button>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">firmanmm</button>
    </div>
    <div id="soal-6" class="container q-soal quiz-animateable quiz-away">
        <h2 class="quiz-title">Huruf Yang Ada di Keyboard Adalah?</h2>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">A</button>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">Z</button>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">Q</button>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">7</button>
    </div>
    <div id="soal-7" class="container q-soal quiz-animateable quiz-away">
        <h2 class="quiz-title">Tekan Alt + F4 Untuk</h2>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">Menghibur</button>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">Mengclose</button>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">Menutup</button>
    </div>
    <div id="soal-8" class="container q-soal quiz-animateable quiz-away">
        <h2 class="quiz-title">10 + 1 + log 2 + log 2 + log 2 + 10 = ?</h2>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">21 + 3 Log 2</button>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">21 - 3 Log 2</button>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">21 3 Log 2</button>
    </div>
    <div id="soal-9" class="container q-soal quiz-animateable quiz-away">
        <h2 class="quiz-title">Apa yang anda dapat setelah quiz nomor sekarang?</h2>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">Lebih banyak Quiz</button>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">Tidak ada</button>
    </div>
    <div id="soal-10" class="container q-soal quiz-animateable quiz-away">
        <h2 class="quiz-title">Quiz ini adalah quiz nomor ke ?</h2>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">11</button>
        <button class="quiz-answer" onclick="NextQuiz(this,false)">Sepeluh</button>
        <button class="quiz-answer" onclick="NextQuiz(this,true)">1010</button>
    </div>
    <div id="q-result" class="quiz-animateable container quiz-away">
        <h1 class="quiz-greet">Hasil <span id="q-username"></span></h1>
        <h1 id="q-score" class="quiz-greet"></h1>
        <button class="quiz-mulai" onclick="RestartQuiz();" style="padding-top: 20px; padding-bottom: 20px; margin-top: 10px;">Coba Lagi</button><br>
        <span class="quiz-text">*) Semangat Mencoba</span>
        <div style="width: 100%;">
            <img style="max-width: 100%;" id="q-sertif-img" src="http://firmanmm.kuliahweb.net/sertif.php?">
        </div>
    </div>
    
</div>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
    var nilai = 0;
    var iterator = 1;
    var maxIterator = 0;
    var username = "someone";
    var tempData;
    var RE = new RegExp('[a-zA-Z]{4}');
    $(document).ready(function() {
        maxIterator = $('.q-soal').length;
        tempData = $('#q-name');
        $('#q-name').keyup(function(event) {
            username = tempData.val();
            if(RE.test(username)){
                $('#quiz-start').removeClass('quiz-away');
            }else{
                $('#quiz-start').addClass('quiz-away');
            }
        });
        $('#q-name').blur(function(event) {
            if(RE.test(username)){
                $('#q-name').removeClass('quiz-input-invalid');
            }else{
                $('#q-name').addClass('quiz-input-invalid');
            }
        });
    });
    function RestartQuiz () {
        $('.quiz-div').removeClass('quiz-auto-height');
        $('#q-result').addClass('quiz-away');
        $('#q-greet').removeClass('quiz-away');
    }
    function StartQuiz() {
        nilai = 0;
        iterator = 1;
        username = $('input[name=username]').val();
        $('#q-greet').addClass('quiz-away');
        $('#q-quiz').removeClass('quiz-away');
        $('#q-result').addClass('quiz-away');
        $('#soal-'+iterator).removeClass('quiz-away');
    }
    function NextQuiz(caller,hasil){
        $(caller).parent().addClass('quiz-away');
        if(hasil){
            nilai++;
        }
        iterator++;
        if(iterator == maxIterator + 1){
            $('#q-result').removeClass('quiz-away');
            $('#q-username').html(username);
            $('#q-score').html(nilai * 100 / 10);
            $('#q-sertif-img').attr('src', 'http://firmanmm.kuliahweb.net/sertif.php?name='+username+'&score='+nilai * 100/10);
            $('.quiz-div').addClass('quiz-auto-height');
        }else{
            $('#soal-'+iterator).removeClass('quiz-away');
        }
    }
</script>
<?php include "footer.php" ?>