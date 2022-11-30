'use strict'
let editor;
document.getElementById('editor').style.fontSize = '15px';
document.getElementById('editor').style.paddingBlock = '20px';
document.getElementById('editor').style.tableLayoutfontSize='16px';
window.onload = function () {
    editor = ace.edit("editor");
    // editor.setTheme("ace/theme/dracula");
    editor.setTheme("ace/theme/twilight");
    editor.session.setMode("ace/mode/javascript");
    editor.resize();
    // editor.session.setTabSize(4);
    // editor.setHighlightActiveLine(true);
}
let js_code = document.querySelector('#editor');
    let output = document.querySelector('#output');
function execute() {
    localStorage.setItem('js_code', js_code.value)
    output.contentWindow.eval (localStorage.js_code)
    
    /*partie commenté: code ace
    $.ajax({
        url:("editeur_mezrn_js.php"),
        method: "POST",      
        data: {
            language: $("#languages").val(),
            code: editor.getSession().getValue()
        }, 
        success: function (response) {
            $(".output").text(response)
        }
    })
    end code ace*/

}
js_code.onkeyup = () => execute()
js_code.value=localStorage.js_code