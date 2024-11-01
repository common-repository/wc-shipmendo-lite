// admin.js - 2021

function shipmendo_lite_copy2clipboard(text) {
    var input = document.getElementById('shipmendo-lite-copy-area');
    input.value = text;
    input.select();
    input.setSelectionRange(0, 99999); /* For mobile devices */
    document.execCommand("copy");
}

function shipmendo_lite_insert2input(text) {
    var input = document.getElementById('sms_message');
    input.value += text;
}

window.addEventListener('load',function () {
    if (document.getElementById('enable_sms') !== null) {
        document.getElementById('enable_sms').addEventListener('change', function () {
            document.getElementById('sms-message-template-setting').style.display = this.checked ? "" : "none"
        })
    }
})
