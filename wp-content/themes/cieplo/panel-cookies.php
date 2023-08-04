<?php 
    $cookies_wstep = get_field('cookies_wstep', 'option');
    $cookies_wybieram = get_field('cookies_wybieram', 'option');
    $cookies_tekst_zgoda = get_field('cookies_tekst_zgoda', 'option');
    $cookies_tekst_ustawienia = get_field('cookies_tekst_ustawienia', 'option');
    $cookies_tekst_zamknij = get_field('cookies_tekst_zamknij', 'option');
?>

<div class="cookies">
    <div class="cookies-default">
        <?php echo $cookies_wstep ?>
        <div class="cookies-buttons">
            <button class="cookies-accept"><?php echo $cookies_tekst_zgoda ?></button>
            <button class="cookies-settings"><?php echo $cookies_tekst_ustawienia ?></button>
        </div>
    </div>
    <?php if( have_rows('cookies_cookiesy', 'option') ): ?>
    <div class="cookies-advanced-settings" style="display: none">
        <?php echo $cookies_wybieram ?>
        <?php while( have_rows('cookies_cookiesy','option') ): the_row(); ?>
        <?php 
            $typ = get_sub_field_object('typ');
            $wartosc = $typ['value'];
            $nazwa = $typ['choices'][ $wartosc ];
        ?>
        <div>
            <label>
                <?php echo $nazwa ?>
                <input type="checkbox" checked class="cookies-option" />
                <span class="slider"></span>
            </label>
        </div>
        <?php endwhile; ?>
        <div class="cookies-buttons">
            <button class="cookies-accept-second"><?php echo $cookies_tekst_zgoda ?></button>
            <button class="cookies-close"><?php echo $cookies_tekst_zamknij ?></button>
        </div>
    </div>
    <?php endif; ?>
</div>


<script>
"use strict";
const head = document.querySelector("head");
const cookies = document.querySelector(".cookies");
const accept = document.querySelector(".cookies-accept");
const acceptSecond = document.querySelector(".cookies-accept-second");
const showSettings = document.querySelector(".cookies-settings");
const closeSettings = document.querySelector(".cookies-close");
const defaultSettings = document.querySelector(".cookies-default");
const advancedSettings = document.querySelector(".cookies-advanced-settings");
const toggleButtons = [...document.querySelectorAll(".cookies-option")];
let objectArrayStorage = localStorage.getItem("cookiesObj");
let cookiesAllowedStorage = localStorage.getItem("cookiesAllowed");
let dateStorage = localStorage.getItem("expiredDate");
let objectArray;
<?php if( have_rows('cookies_cookiesy', 'option') ): ?>
let initialObjectArray = [
    <?php while( have_rows('cookies_cookiesy','option') ): the_row(); ?>
    <?php 
            $kod = get_sub_field('kod');
        ?> {
        state: true,
        code: '<?php echo $kod ?>',
    },
    <?php endwhile; ?>
];
<?php endif; ?>
let isAccepted;
let todaysDate;
let finalDate;
let dateDistance;
let timeLeft;
let refreshInterval = 30;
if (dateStorage !== "") {
    todaysDate = new Date().getTime();
    finalDate = +dateStorage;
    dateDistance = finalDate - todaysDate;
    timeLeft = Math.floor(dateDistance / (1000 * 60 * 60 * 24));
}
if (objectArrayStorage) {
    objectArray = JSON.parse(`${objectArrayStorage}`);
} else {
    objectArray = initialObjectArray;
}

function resetData() {
    objectArray = initialObjectArray;
    localStorage.setItem("cookiesAllowed", "");
    localStorage.setItem("cookiesObj", "");
    localStorage.setItem("expiredDate", "");
}

function updateArray(index) {
    objectArray[index].state = !objectArray[index].state;
}

function loadScriptsToHead() {
    objectArray.forEach((element) => {
        if (element.state) {
            head.innerHTML += element.code;
        }
    });
    cookies.remove();
}

function sendAcceptance() {
    let date = new Date();
    date.setDate(date.getDate() + refreshInterval);
    let expiredDate = date.getTime();
    localStorage.setItem("cookiesAllowed", JSON.stringify(true));
    localStorage.setItem("cookiesObj", JSON.stringify(objectArray));
    localStorage.setItem("expiredDate", expiredDate.toString());
    loadScriptsToHead();
}

function checkIfIsAccepted() {
    if (cookiesAllowedStorage && timeLeft > 0) {
        loadScriptsToHead();
    } else if (cookiesAllowedStorage && timeLeft < 0) {
        resetData();
    } else {
        return;
    }
}

function showAdvancedOptions() {
    advancedSettings.style.display = "block";
    defaultSettings.style.display = "none";
}

function closeAdvancedOptions() {
    advancedSettings.style.display = "none";
    defaultSettings.style.display = "block";
}

checkIfIsAccepted();
showSettings.addEventListener("click", showAdvancedOptions);
closeSettings.addEventListener("click", closeAdvancedOptions);
toggleButtons.forEach((checkbox, index) => {
    checkbox.addEventListener("click", () => {
        updateArray(index);
    });
});
accept.addEventListener("click", sendAcceptance);
acceptSecond.addEventListener("click", sendAcceptance);
//# sourceMappingURL=app.js.map
</script>