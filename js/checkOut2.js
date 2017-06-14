/**
 * Created by Wart on 18/04/2017.
 */


document.getElementById('checkboxcheck').onchange = function() {
    $('#formbox').find('input, textarea, select').attr("disabled", this.checked);
};