/**
 * Created by Bubble on 2016-05-25.
 */


        function InputCheck(RegForm)
        {
            if (RegForm.vis.value == "")
            {
                alert("标题不能为空!");
                RegForm.vis.focus();
                return (false);
            }
            if (RegForm.mes.value == "")
            {
                alert("内容不能为空!");
                RegForm.mes.focus();
                return (false);
            }

        }

