$("div.compare-container").on("click", function (obj) {

    // $.get('/choice.php', {value : obj['currentTarget']["id"]})
    // location.reload()
    window.location.replace("/choice.php?value="+obj['currentTarget']["id"]);
});
