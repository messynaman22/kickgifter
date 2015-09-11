<script>
$(document).ready(function() {
    $("input#js-checkbox-item").click(function() {
        var objList = $("input#js-checkbox-item");
        var total = 0;
        for (var i = 0; i < objList.size(); i++) {
            if (objList.eq(i).prop('checked')) {
                total += objList.eq(i).parents("tr").eq(0).find("td").last().text() * 1;
            }
        }
        $("#js-left").val(($("#js-avaiable").val() * 100 - total * 100) / 100);
    });
});
function onBtnBuy(type) {
    if ($("#js-left").val() * 1 < 0) {
        bootbox.alert("Selected total gift price is over than avaiable");
        return false;
    }
    var objList = $("input#js-checkbox-item");
    var strIds = "";
    for (var i = 0; i < objList.size(); i++) {
        if (objList.eq(i).prop('checked')) {
            strIds += objList.eq(i).val() + ",";
        }
    }
    if (strIds != "") {
        strIds = strIds.substring(0, strIds.length - 1);
    } else {
        bootbox.alert("Please select gift");
        return false;        
    }
    $("input[name='gift_ids']").val(strIds);
    $("input[name='is_creator']").val(type);
    return true;    
}
</script>