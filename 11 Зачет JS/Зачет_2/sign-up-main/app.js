let setNodes = objs => objs.forEach(obj => {
    obj.node = document.querySelector(obj.selector);
    obj.nodeLog = document.querySelector(obj.selectorLog);
});
let addListener = objs => objs.forEach(obj => {
    obj.node.addEventListener("blur", () => {
        for (let error of obj.errors) {
            if (error(obj)) {
                obj.node.classList.add("error");
                return;
            } else {
                obj.nodeLog.innerText = "";
                obj.node.classList.remove("error");
            }
        }
    });
});
let errors = {
    emptyText: obj => obj.node.value ? false : obj.nodeLog.innerText = `${obj.node.placeholder} cannot be empty`,
    wrongChar: obj => obj.node.value.match(/^[a-zа-яё -]+$/i) ? false :
        obj.nodeLog.innerText = `${obj.node.placeholder} must contain only alphabetic characters, a dash or a space`,
    wrongEmail: obj => obj.node.value.match(/^[\w-.]+@[\w-]+\.[a-z]{2,4}$/i) ? false :
        obj.nodeLog.innerText = `Looks like this is not an email`,
    wrongLength: obj => obj.node.value.length >= 8 ? false :
        obj.nodeLog.innerText = `Password must contain at least 8 characters`,
};
let inputs = [
    {
        selector: "#fname",
        selectorLog: "#fname-p",
        errors: [errors.emptyText, errors.wrongChar]
    },
    {
        selector: "#lname",
        selectorLog: "#lname-p",
        errors: [errors.emptyText, errors.wrongChar]
    },
    {
        selector: "#email",
        selectorLog: "#email-p",
        errors: [errors.emptyText, errors.wrongEmail]
    },
    {
        selector: "#pword",
        selectorLog: "#pword-p",
        errors: [errors.emptyText, errors.wrongLength]
    }
]
setNodes(inputs);
addListener(inputs);

/*
    errors - объект, свойства которого являются функциями. Тело каждой функции принимает на вход объект с узлом,
    значение которого используется для верификации, и возвращает лог, но используется, как булево значение .
    Логика построения при добавлении новых проверок:
    условие выполняется - вывод в лог ? false (не нужен) : иначе в лог выводится сообщение.

    inputs - массив объектов, каждый объект которого используется для построения и работы с узлами документа.
    Логика построения при добавлении новых объектов:
    selector - селектор узла, значение которого будет проверяться;
    selectorLog - селектор узла, в значение которого будет передаваться лог ошибки;
    errors - массив верификаторов из объекта errors.

    setNodes() - функция, которая добавляет всем объектам из массива inputs ссылки на узлы документа по селекторам.

    addListener(inputs) - функция, которая добавляет всем объектам из массива inputs слушателя, управляет классом
    error в узле, а также обрабатывает массив верификаторов из объектов массива inputs.
 */