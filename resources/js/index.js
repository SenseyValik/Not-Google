$(document).ready(function () {
    $(".search-box").on("input", function () {
        var query = $(this).val();
        if(query.length < 3){return;}
        $.ajax({
            url: "resources/php-ajax/search/search.php",
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
        var myContainer = $('.note-div');
        $(".note-container").remove();
        if (data.length === 0) {
            console.log('Not found');
        } else {
            data.forEach(function (item) {
                console.log(item);
                var note = $('<div class="note-container" id="modal-container"> <h3>'+item[0]+'</h3> <p>'+item[1]+' </p> <div class="modal" id="my-modal"> <div class="modal__box"> <button class="modal__close-btn" id="close-my-modal-btn"> <svg width="13" height="13" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M2.09082 0.03125L22.9999 22.0294L20.909 24.2292L-8.73579e-05 2.23106L2.09082 0.03125Z" fill="#333333" /> <path d="M0 22.0295L20.9091 0.0314368L23 2.23125L2.09091 24.2294L0 22.0295Z" fill="#333333" /> </svg> </button> <input placeholder="Write title" class="modal_box--title"></input> <textarea placeholder="Write your note" name="" id="" cols="35" rows="10"></textarea> </div> </div> </div>').click(function(){$(this).find('#my-modal').addClass("open");});
                myContainer.append(note);
                note.fadeIn(500);
                note.find('#close-my-modal-btn').on('click', function() {
                    console.log(note.find('#my-modal'));
                    note.find('#my-modal').first().removeClass('modal open').addClass('open');
                });
            });
        }

    }


 


});