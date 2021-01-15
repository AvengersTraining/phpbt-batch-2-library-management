$(document).ready(function(){
    $("input[name|='user']").keypress(function (e){
        if(e.keyCode == 13 || e.which == 13) {
            const user = document.getElementsByName("user")[0].value;
            e.preventDefault();
            if (user) {
                $.ajax({
                    url: `/admin/users/${user}`,
                    success: function (result) {
                        if (result.is_active == false) {
                            $("#not_found_user").hide();
                            $("#user_detail").empty();
                            $("#banned_user").show();
                        } else {
                            $("#not_found_user").hide();
                            $("#banned_user").hide();
                            $("#user_detail").html(result);
                        }
                    },
                    statusCode: {
                        404: function () {
                            $("#banned_user").hide();
                            $("#user_detail").empty();
                            $("#not_found_user").show();

                        }
                    }
                });
            }
        }
    });
});
$(document).ready(function (){
    let list = [];
    $("input[name|='book']").keypress(function (e){
        if(e.keyCode == 13 || e.which == 13) {
            const book = document.getElementsByName("book")[0].value;
            e.preventDefault();
            if (book) {
                $.ajax({
                    url: `/admin/books/${book}`,
                    success: function(result){
                        if (result.is_active == false) {
                            $("#selected_book").hide();
                            $("#not_found_book").hide();
                            $("#unavailable_book").show();
                        } else {
                            if (!list.includes(result)) {
                                list.push(result);
                                $("#selected_book").hide();
                                $("#not_found_book").hide();
                                $("#unavailable_book").hide();
                                $("#book_detail").append(result);
                            } else {
                                $("#unavailable_book").hide();
                                $("#not_found_book").hide();
                                $("#selected_book").show();
                            }
                        }
                    },
                    statusCode: {
                        404: function (){
                            $("#selected_book").hide();
                            $("#unavailable_book").hide();
                            $("#not_found_book").show();
                        }
                    }
                });
            }
        }
    });
});
function removebook(e) {
    $(e).parent().parent().detach();
}
