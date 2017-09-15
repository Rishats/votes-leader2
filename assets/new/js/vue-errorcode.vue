// register
Vue.component('code-error', {
    template: '<article class="message is-danger">\n' +
    '    <div class="message-header">\n' +
    '        <p><strong>Проверьте вводимые данные</strong>! <a>Узнать подробнее</a></p>\n' +
    '        <button class="delete" aria-label="delete"></button>\n' +
    '    </div>\n' +
    '    <div class="message-body">\n' +
    '        Вы должны указать код который пришел Вам на почту.\n' +
    '    </div>\n' +
    '</article>'
});
