$(document).ready(function () {
    $(".search-box").on("input", function () {
        var query = $(this).val();
        if(query.length < 3){return;}
        $.ajax({
            url: "/resources/php-ajax/search/search.php",
            data: {
                search_content: query,
                userId: $("#userId").text()
            },
            method: "POST",
            dataType: "json",
            success: function (data) {
                console.log(data);
                displayResults(data);
            }
        });
    });

    function displayResults(data) {
        var myContainer = $('.my-container');
        $(".note").remove();
        if (data.length === 0) {
            console.log('Not found');
        } else {
            data.forEach(function (item) {
                console.log(item);
                myContainer.append('<div class="container note">'+item[1]+'</div>');
            });
        }
        $('.note').fadeIn(500);
    }
});