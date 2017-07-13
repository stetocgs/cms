<script src="/public/html/../libs/jquery/jquery/dist/jquery.js"></script>
<script src="/public/html/../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="/public/html/js/ui-load.js"></script>
<script src="/public/html/js/ui-jp.config.js"></script>
<script src="/public/html/js/ui-jp.js"></script>
<script src="/public/html/js/ui-nav.js"></script>
<script src="/public/html/js/ui-toggle.js"></script>
<script src="/public/html/js/ui-client.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script>
    function actionFormatter(value, row, index) {
        return [
            '<a class="like" href="javascript:void(0)" title="Like">',
            '<i class="glyphicon glyphicon-heart"></i>',
            '</a>',
            '<a class="edit ml10" href="javascript:updateButtons()" title="Edit">',
            '<i class="glyphicon glyphicon-edit"></i>',
            '</a>',
            '<a class="remove ml10" href="javascript:void(0)" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }

    window.actionEvents = {
        'click .like': function (e, value, row, index) {
            alert('You click like icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        },
        'click .edit': function (e, value, row, index) {
            alert('You click edit icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        },
        'click .remove': function (e, value, row, index) {
            alert('You click remove icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        }
    };
    function LinkFormatter(value, row, index) {
        return "<a href='"+row.url+"'>"+value+"</a>";
    }
</script>


</body>
</html>
