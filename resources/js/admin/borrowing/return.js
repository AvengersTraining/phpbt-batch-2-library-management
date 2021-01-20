let list = [];
$(document).ready(function (){
    $("input[name|='order']").keypress(function (e){
        if(e.keyCode == 13 || e.which == 13) {
            const order = document.getElementsByName("order")[0].value;
            e.preventDefault();
            if (order) {
                $.ajax({
                    url: `/admin/orders/${order}`,
                    success: function(result){
                        console.log(result);
                        if (!list.includes(result)) {
                            list.push(result);
                            $("#selected_order").hide();
                            $("#not_found_order").hide();
                            $("#order_detail").append(result);
                        } else {
                            $("#not_found_order").hide();
                            $("#selected_order").show();
                        }

                    },
                    statusCode: {
                        404: function (){
                            $("#selected_order").hide();
                            $("#not_found_order").show();
                        }
                    }
                });
            }
        }
    });
});
function remove(e) {
    list.splice(list.indexOf(e));
    $(e).parent().parent().detach();
}
