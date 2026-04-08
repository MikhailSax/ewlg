const siteHeader = document.getElementById('siteHeader');
const mobileMenuButton = document.getElementById('mobileMenuButton');
const mobileNav = document.getElementById('mobileNav');

if (mobileMenuButton && mobileNav) {
  mobileMenuButton.addEventListener('click', () => {
    mobileNav.classList.toggle('hidden');
  });
}

window.addEventListener('scroll', () => {
  if (!siteHeader) return;
  siteHeader.classList.toggle('sticky-shadow', window.scrollY > 8);
});

const leadModal = document.getElementById('leadModal');
const closeLeadModalButton = document.getElementById('closeLeadModal');

const openLeadModal = () => {
  if (!leadModal) return;
  leadModal.classList.remove('hidden');
  document.body.classList.add('overflow-hidden');
};

const closeLeadModal = () => {
  if (!leadModal) return;
  leadModal.classList.add('hidden');
  document.body.classList.remove('overflow-hidden');
};

document.querySelectorAll('[data-open-lead]').forEach((button) => {
  button.addEventListener('click', (event) => {
    event.preventDefault();
    openLeadModal();
  });
});

if (closeLeadModalButton) {
  closeLeadModalButton.addEventListener('click', closeLeadModal);
}

if (leadModal) {
  leadModal.addEventListener('click', (event) => {
    if (event.target === leadModal) {
      closeLeadModal();
    }
  });
}

document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') {
    closeLeadModal();
  }
});

if (mobileNav) {
  mobileNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => mobileNav.classList.add('hidden'));
  });
}

document.querySelectorAll('[data-accordion]').forEach((button) => {
  button.addEventListener('click', () => {
    const content = button.nextElementSibling;
    const icon = button.querySelector('[data-icon]');
    if (!content) return;
    const isHidden = content.classList.contains('hidden');
    content.classList.toggle('hidden');
    if (icon) icon.textContent = isHidden ? '−' : '+';
  });
});

const reviewItems = Array.from(document.querySelectorAll('.review-item'));
const prevReviewButton = document.getElementById('prevReview');
const nextReviewButton = document.getElementById('nextReview');
let reviewIndex = 0;

function showReview(index) {
  reviewItems.forEach((item, itemIndex) => {
    item.classList.toggle('hidden', itemIndex !== index);
  });
}

if (reviewItems.length && prevReviewButton && nextReviewButton) {
  showReview(reviewIndex);
  prevReviewButton.addEventListener('click', () => {
    reviewIndex = (reviewIndex - 1 + reviewItems.length) % reviewItems.length;
    showReview(reviewIndex);
  });

  nextReviewButton.addEventListener('click', () => {
    reviewIndex = (reviewIndex + 1) % reviewItems.length;
    showReview(reviewIndex);
  });
}

const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
document.querySelectorAll('.js-validate-form').forEach((form) => {
  const successBox = form.querySelector('[data-form-success]');

  form.addEventListener('submit', async (event) => {
    let valid = true;

    form.querySelectorAll('[required]').forEach((field) => {
      const value = field.value.trim();
      const isEmail = field.type === 'email';
      const isValid = value && (!isEmail || emailPattern.test(value));
      field.classList.toggle('border-red-500', !isValid);
      valid = valid && isValid;
    });

    if (!valid) {
      event.preventDefault();
      return;
    }

    const action = form.getAttribute('action');
    const method = (form.getAttribute('method') || 'POST').toUpperCase();

    // Если action не задан — работаем как раньше: просто показываем success и сбрасываем форму.
    if (!action) {
      event.preventDefault();
      form.reset();
      if (successBox) {
        successBox.classList.remove('hidden');
        setTimeout(() => successBox.classList.add('hidden'), 4000);
      }
      return;
    }

    event.preventDefault();

    const tokenInput = form.querySelector('input[name="_token"]');
    const csrfToken = tokenInput ? tokenInput.value : '';

    // Отправляем as x-www-form-urlencoded, чтобы backend Laravel без проблем прочитал Request.
    const fd = new FormData(form);
    const body = new URLSearchParams();
    fd.forEach((value, key) => body.append(key, value));

    try {
      const response = await fetch(action, {
        method,
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
          'X-Requested-With': 'XMLHttpRequest',
          ...(csrfToken ? { 'X-CSRF-TOKEN': csrfToken } : {})
        },
        body: body.toString(),
      });

      if (!response.ok) throw new Error('Request failed');

      form.reset();
      if (successBox) {
        successBox.classList.remove('hidden');
        setTimeout(() => successBox.classList.add('hidden'), 4000);
      }
    } catch (e) {
      // Можно расширить UI ошибкой, но для MVP достаточно оставить форму заполненной.
      // eslint-disable-next-line no-console
      console.error(e);
    }
  });
});
