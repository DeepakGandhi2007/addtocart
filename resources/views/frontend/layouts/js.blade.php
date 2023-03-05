<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".dhhdhd").click(function() {
        var dataname = $(this).attr("data-name");
        var dataid = $(this).attr("data-id");
        var dataprice = $(this).attr("data-price");
        let url = "{{ route('session') }}";
        $.ajax({
            url: url,
            method: 'post',
            data: {
                dataname: dataname,
                "_token": "{{ csrf_token() }}",
                dataid: dataid,
                dataprice: dataprice,
            },
            success: function(response) {
                if (response.status == "Already Added to Cart") {
                    alert("Already Added to Cart");
                }
                for (var j = 0; j < response.count; j++) {
                    count = j + 1;
                }
                var html = '';
                var total = 0;

                for (var i = 0; i < response.data.length; i++) {
                    console.log(response.data);
                    console.log(response.data[i].item_name)
                    item_name = response.data[i].item_name;
                    item_id = response.data[i].item_id;
                    price = response.data[i].item_price;
                    quantity = response.data[i].item_quantity;
                    total = total + quantity * price;
                    console.log(total);
                    html +=
                        '<div class="ant-card selectedSerCard ant-card-bordered" style="margin-top: 10px; margin-bottom: 10px;">'
                    html += '<div class="ant-card-body">'
                    html += '<div class="ant-list ant-list-split">'
                    html += '<div class="ant-spin-nested-loading">'
                    html += '<div class="ant-spin-container">'
                    html += '<ul class="ant-list-items">'
                    html += '<li class="ant-list-item">'
                    html += '<div class="ant-list-item-meta">'
                    html += '<div class="ant-list-item-meta-content">'
                    html += '<div class="ant-list-item-meta-description">'
                    html += '<div class="ant-row">'
                    html += '<div class="ant-col ant-col-12">'
                    html +=
                        '<p style="font-size: 15px; font-weight: 600; margin-bottom: 0px; margin-left: 2px;float:left">'+item_name+'</p>'
                    html += '</div>'
                    html += '<div class="ant-col ant-col-6">'
                    html += '<td style="text-align: center;">'
                    html +=
                        '<span class="plus-minus-btn input-add ant-input-group-wrapper ant-input-group-wrapper-sm" style="height: 28px;">'
                    html += '<span class="ant-input-wrapper ant-input-group">'
                    html += '<span class="ant-input-group-addon">'
                    html +=
                        '<i aria-label="icon: minus" tabindex="-1" class="anticon anticon-minus" style="cursor: pointer;">'
                    html +=
                        '<svg viewBox="64 64 896 896" focusable="false" class="" data-icon="minus" width="1em" height="1em" fill="currentColor" aria-hidden="true">'
                    html +=
                        '<path d="M872 474H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h720c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8z"></path>'
                    html += '</svg></i></span>'
                    html += '<input class="ant-input ant-input-sm" type="text" value="1">'
                    html += '<span class="ant-input-group-addon">'
                    html +=
                        '<i aria-label="icon: plus" tabindex="-1" class="anticon anticon-plus" style="cursor: pointer;">'
                    html +=
                        '<svg viewBox="64 64 896 896" focusable="false" class="" data-icon="plus" width="1em" height="1em" fill="currentColor" aria-hidden="true">'
                    html +=
                        '<path d="M482 152h60q8 0 8 8v704q0 8-8 8h-60q-8 0-8-8V160q0-8 8-8z"></path><path d="M176 474h672q8 0 8 8v60q0 8-8 8H176q-8 0-8-8v-60q0-8 8-8z"></path>'
                    html += '</svg></i></span></span></span></td>'
                    html += '</div>'
                    html += '<div class="ant-col ant-col-6" style="text-align: right;">'
                    html +=
                        '<p style="font-size: 15px; font-weight: 600; margin-bottom: 0px;">'
                    html += '<span> ₹&nbsp;'+price+'</span></p></div>'
                    html += '</div>'
                  
                }
                $('#cartdata').html(html);
            }
        });

    });
});
</script>