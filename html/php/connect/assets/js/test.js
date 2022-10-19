let check = 0;
document.querySelector(".btn_modify").addEventListener("click", () => {
    document.querySelector(".modify").classList.add("show");
    check = 1;
});

document.querySelector(".btn_delete").addEventListener("click", () => {
    document.querySelector(".delete").classList.add("show");
    check = 2;
});

document.querySelector(".modify .btn_cancel").addEventListener("click", () => {
    document.querySelector(".modify").classList.remove("show");
    check = 0;
});

document.querySelector(".delete .btn_cancel").addEventListener("click", () => {
    document.querySelector(".delete").classList.remove("show");
    check = 0;
});

function post_to_url(path, params, method) {
    method = method || "post";
    const form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);
    for (let key in params) {
        let hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", key);
        hiddenField.setAttribute("value", params[key]);
        form.appendChild(hiddenField);
    }
    document.body.appendChild(form);
    form.submit();
}
if (check == 1) {
    let btn_check = ".modify .btn_check";
} else if (check == 2) {
    let btn_check = ".delete .btn_check";
}
document.querySelector(btn_check).addEventListener("click", () => {
    $.ajax({
        type: "POST",
        url: "feedBackCheck.php",
        data: { userPass: userPass, type: "userPass" },
        dataType: "json",
        success: function (data) {
            if (data.result == "good") {
                if (check == 1) {
                    post_to_url("feedBackBoardModify.php", { feedBackBoardId: $feedBackBoardID });
                    return true;
                } else if (check == 2) {
                    post_to_url("feedBackBoardDelete.php", { feedBackBoardId: $feedBackBoardID });
                    return true;
                }
            } else if (data.result == "bad") {
                $("#youPass").attr("placeholder", "비밀번호가 가 일치하지 않습니다.");
                $("#youPass").val("");
                return false;
            }
        },
        error: function (request, status, error) {
            console.log("request" + request);
            console.log("status" + status);
            console.log("error" + error);
        },
    });
});
