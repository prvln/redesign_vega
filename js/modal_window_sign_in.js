(function () {
  if (typeof window.CustomEvent === "function") return false;
  function CustomEvent(event, params) {
      params = params || { bubbles: false, cancelable: false, detail: null };
      var evt = document.createEvent('CustomEvent');
      evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
      return evt;
  }
  window.CustomEvent = CustomEvent;
  })();

  $Modal = function (options) {
  var
      _elemModal,
      _eventShowModal,
      _eventHideModal,
      _hiding = false,
      _destroyed = false,
      _animationSpeed = 200;

  function _createModal(options) {
      var
      elemModal = document.createElement('div'),
      ModalTemplate = '<div class="Modal__backdrop" data-dismiss="Modal"><div class="Modal__content"><div class="Modal__header"><span class="Modal__btn-close" data-dismiss="Modal" title="Закрыть">×</span></div><div class="Modal__body" data-Modal="content">{{content}}</div></div>',
      ModalHTML;
      elemModal.classList.add('Modal');
      ModalHTML = ModalTemplate.replace('{{title}}', options.title);
      ModalHTML = ModalHTML.replace('{{content}}', options.content || '');
      elemModal.innerHTML = ModalHTML;
      document.body.appendChild(elemModal);
      return elemModal;
  }

  function _showModal() {
      if (!_destroyed && !_hiding) {
      _elemModal.classList.add('Modal__show');
      document.dispatchEvent(_eventShowModal);
      }
  }

  function _hideModal() {
      _hiding = true;
      _elemModal.classList.remove('Modal__show');
      _elemModal.classList.add('Modal__hiding');
      setTimeout(function () {
      _elemModal.classList.remove('Modal__hiding');
      _hiding = false;
      }, _animationSpeed);
      document.dispatchEvent(_eventHideModal);
  }

  function _handlerCloseModal(e) {
      if (e.target.dataset.dismiss === 'Modal') {
      _hideModal();
      }
  }

  _elemModal = _createModal(options || {});
  _elemModal.addEventListener('click', _handlerCloseModal);
  _eventShowModal = new CustomEvent('show.Modal', { detail: _elemModal });
  _eventHideModal = new CustomEvent('hide.Modal', { detail: _elemModal });

  return {
      show: _showModal,
      hide: _hideModal,
      destroy: function () {
      _elemModal.parentElement.removeChild(_elemModal),
          _elemModal.removeEventListener('click', _handlerCloseModal),
          destroyed = true;
      },
      setContent: function (html) {
      _elemModal.querySelector('[data-Modal="content"]').innerHTML = html;
      }
      
  }
  };

  (function () {
  var ModalSignIn = $Modal({
      content: '<div class="d-flex h-100 justify-content-center align-items-md-start align-items-lg-center m-2"><form class="col col-md-6 align-items-center" action="/auth/action.php" method="POST" enctype="multipart/form-data"><div class="d-flex justify-content-center"><a href="#" class=""><svg xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 45 45"><path id="Logo" data-name="Logo" d="M149.546,195.5a22.506,22.506,0,0,0-22.1,18.244,54.633,54.633,0,0,1,9.445-2.678,55.249,55.249,0,0,1,18.59-.3,54.567,54.567,0,0,0-28.435,7.519,22.527,22.527,0,0,0,.674,5.206,40.427,40.427,0,0,1,29.827-10.734,37.33,37.33,0,0,0-11.988,3.283,38.273,38.273,0,0,0-15.447,13.3,22.594,22.594,0,0,0,3.914,4.945,37.942,37.942,0,0,1,8.877-11.167,38.443,38.443,0,0,1,17.365-8.412l.008-.551-5.975,1.918,4.869-3.836-6.418-4.131,7.451,2.139v-4.131l2.066,3.541,2.434-1.475-.664,2.8,3.91.885-3.91,1.254,4.426,7.008-6.049-5.533-2.213,4.943.054-3.912c-5.48,3.747-11.053,7.675-13.849,13.428a21.07,21.07,0,0,0-1.908,10.866,22.5,22.5,0,1,0,5.044-44.432Z" transform="translate(-127.05 -195.5)" fill="#0D6EFD"/></svg></a></div><h2 class="mb-3 fw-normal text-center my-3">Введите данные</h2><div class="form-floating my-3"><input type="login" class="form-control" id="floatingInput" placeholder="Login" name="login"><label for="floatingInput">Логин</label></div><div class="form-floating my-3"><input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"><label for="floatingPassword">Пароль</label></div><input type="hidden" name="action" value="login"><button class="w-100 btn btn-lg btn-primary" type="submit">Вход</button><div class="checkbox my-3 text-center"><a href="#"><p>Забыли логин или пароль?</p></a></div></form></div>'
  });

  document.addEventListener('click', function (e) {
      if (e.target.dataset.toggle == 'ModalSignIn'){
        ModalSignIn.show();
      }
  });
  })();