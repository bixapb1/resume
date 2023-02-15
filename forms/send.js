const TOKEN = "1729126717:AAH3p26awsYbD6BAEtQQFB0FIq47eBPl-yI";
const CHAT_ID = "-515702547";
const URL_API = `https://api.telegram.org/bot${TOKEN}/sendMessage`;

document.getElementById("sendForm").addEventListener("submit", function (e) {
  e.preventDefault();
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let message = document.getElementById("message").value;

  let body = `<b>Name : </b>${name}\n`;
  body += `<b>Email : </b> ${email}  \n`;
  body += `<b>Message : </b> ${message}  \n`;

  axios
    .post(URL_API, {
      chat_id: CHAT_ID,
      parse_mode: "html",
      text: body,
    })
    .then((res) => {
      if (res.status == 200) {
        window.location.href = "./forms/index.html";
      }
    });
});
