$("div.compare-container").on("click", function (obj) {

    $get('/choice.php', {value : obj['currentTarget']["id"]})

});
