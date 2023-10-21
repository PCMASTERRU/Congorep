// Объекты раздела "Документы"

// Диалоговое окно
class AdmDialog {
	_shadow = 0//слой затемнения
	_list = 0//объект списка
	_modal = 0//объект окна

	constructor(props)// записываем настройки окна
	{
		let defaultConfig = {
			linkAttributeName: "data-dialog",
			strid: '',
			objret: {},
			funSelect: (d) => {}
		}
		this.config = Object.assign(defaultConfig, props)
		this.init()
	}
	init()// создаём html модального окна
	{
		if (!this._shadow) {
			this._shadow = document.createElement("DIV")
			this._shadow.className = "overlay"
			document.body.appendChild(this._shadow)
		}
	}
	eventFeel()// вешаем на элементы обработчик событий
	{
		this._modal.addEventListener("click", function (e) {
			const obj = e.target.closest(`[${this.config.linkAttributeName}]`)
			if (obj) {
				e.preventDefault()
				this.open()
				return
			}
			if (e.target.closest("[data-dialog-close]")) {
				this.close()
				return
			}
		}.bind(this))
	}
	open() {
		this._list.load()

		this._shadow.classList.add('active')
		this._modal.classList.add('active')
		return
	}
	close() {
		if (this._shadow) this._shadow.classList.remove('active')
		if (this._modal) this._modal.classList.remove('active')
		this._shadow.parentNode.removeChild(this._shadow)
		this._modal.parentNode.removeChild(this._modal)
		delete this
	}
}
