document.addEventListener('DOMContentLoaded', function () {
	if (document.body.classList.contains('page-template-career')) {
		const test = document.getElementById('landing-file');
		const fileNameContainer = document.getElementById('file-name-container-inner');
		fileNameContainer.innerHTML = ' ';

		document.getElementById('landing-file').addEventListener('change', function () {
			if (this.files.length > 0) {
				fileNameContainer.textContent = this.files[0].name;
			}
		});

		const pickJobHandler = btn => {
			const jobItem = btn.closest('.open-positions__job');
			const jobContent = jobItem.querySelector('.open-positions__job-info');
			const jobName = jobContent.querySelector('.open-positions__job-info-name').textContent;
			const select = document.querySelector('.selected-text');
			if (select) {
				select.innerHTML = jobName;
			}
		};

		const initJobBtns = () => {
			const jobBtns = document.querySelectorAll('.open-positions__job-btn');
			jobBtns.forEach(btn => {
				btn.addEventListener('click', () => {
					pickJobHandler(btn);
				});
			});
		};

		const initCustomSelects = () => {
			const customSelects = document.querySelectorAll('.custom-select');
			customSelects.forEach(select => {
				const selected = select.querySelector('.select-selected');
				const items = select.querySelector('.select-items');
				const options = items.querySelectorAll('.select-item');

				const handleOptionClick = option => {
					selected.querySelector('.selected-text').textContent = option.textContent;
					items.classList.add('select-hide');
					selected.classList.remove('select-arrow-active');
				};

				selected.addEventListener('click', () => {
					items.classList.toggle('select-hide');
					selected.classList.toggle('select-arrow-active');
				});

				options.forEach(option => {
					option.addEventListener('click', () => handleOptionClick(option));
				});
			});

			document.addEventListener('click', event => {
				customSelects.forEach(select => {
					const selected = select.querySelector('.select-selected');
					const items = select.querySelector('.select-items');
					if (!select.contains(event.target) && selected && items) {
						items.classList.add('select-hide');
						selected.classList.remove('select-arrow-active');
					}
				});
			});
		};

		const populateSelectItems = () => {
			const jobTitles = document.querySelectorAll('.application-position');
			const selectItemsContainer = document.querySelector('.select-items');
			if (selectItemsContainer) {
				selectItemsContainer.innerHTML = '';
				jobTitles.forEach(title => {
					const option = document.createElement('div');
					option.classList.add('select-item');
					option.textContent = title.textContent;
					selectItemsContainer.appendChild(option);
				});
			}
		};

		const initUploadBtn = () => {
			const uploadBtn = document.querySelector('.form__cv-btn');
			if (uploadBtn) {
				uploadBtn.addEventListener('click', function () {
					const fileInput = document.querySelector('.form__cv-input');
					if (fileInput) {
						fileInput.click();
					}
				});
			}
		};

		const initialize = () => {
			// showJobDescHandler();
			initJobBtns();
			populateSelectItems();
			initCustomSelects();
			initUploadBtn();
		};

		initialize();
	}
});
