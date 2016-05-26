/**
 * Created by Bubble on 2016-05-26.
 */
function InputCheck1(AddForm)
{
    if (AddForm.title.value == "")
    {
        alert("游客名不能为空!");
        AddForm.title.focus();
        return (false);
    }
    if (AddForm.blog.value == "")
    {
        alert("留言内容不能为空!");
        AddForm.blog.focus();
        return (false);
    }
    function msgbox(n){
        document.getElementById('inputbox').style.display=n?'block':'none';     /* 点击按钮打开/关闭 对话框 */
    }
}$(document).ready(function() {
    $('#viewb').load('php/blo_view.php?param=10,@k_wbj_1,7,30');
});