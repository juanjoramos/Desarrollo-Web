document.addEventListener('DOMContentLoaded', () => {
  const baseUrl = 'http://localhost:3000/api/tipo_proyectos'; // Actualizado para tipo_proyectos
  const btnListar = document.getElementById('btn-listar');
  const btnCrear = document.getElementById('btn-crear');
  const btnActualizar = document.getElementById('btn-actualizar');
  const btnEliminar = document.getElementById('btn-eliminar');
  const proyectoForm = document.getElementById('proyecto-form'); // Cambiado de usuario-form a proyecto-form
  const statusCodeElement = document.getElementById('status-code');
  const responseMessageElement = document.getElementById('response-message');

  // Función para mostrar respuesta
  function showResponse(statusCode, message) {
    statusCodeElement.textContent = statusCode;


    // Colores según el código de estado
    if (statusCode >= 200 && statusCode < 300) {
      statusCodeElement.style.color = 'green';
    } else if (statusCode >= 400 && statusCode < 500) {
      statusCodeElement.style.color = 'orange';
    } else if (statusCode >= 500) {
      statusCodeElement.style.color = 'red';
    } else {
      statusCodeElement.style.color = 'black';
    }

    responseMessageElement.textContent = typeof message === 'object'
      ? JSON.stringify(message, null, 2)
      : message;
  }

  // Listar tipo de proyectos (GET)
  btnListar.addEventListener('click', async () => {
    try {
      responseMessageElement.textContent = '⏳ Cargando...';
      const response = await fetch(baseUrl);
      const data = await response.json();
      showResponse(response.status, data);
      renderLista(data);
      if (response.ok) {
        proyectoForm.reset();
      }
    } catch (error) {
      showResponse(500, { error: error.message });
    }
  });

  // Crear tipo de proyecto (POST)
  btnCrear.addEventListener('click', async () => {
    const formData = new FormData(proyectoForm);
    const tipoProyecto = {
      codigo: formData.get('codigo'),
      descripcion: formData.get('descripcion'),
      abreviatura: formData.get('abreviatura')
    };

    // Validación de campos vacíos
    if (!tipoProyecto.codigo || !tipoProyecto.descripcion || !tipoProyecto.abreviatura) {
      showResponse(400, { error: 'Todos los campos son obligatorios.' });
      return;
    }

    try {
      responseMessageElement.textContent = '⏳ Cargando...';
      const response = await fetch(baseUrl, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(tipoProyecto)
      });
      const data = await response.json();
      showResponse(response.status, data);
      if (response.ok) {
        proyectoForm.reset();
      }
    } catch (error) {
      showResponse(500, { error: error.message });
    }
  });

  // Actualizar tipo de proyecto (PUT)
  btnActualizar.addEventListener('click', async () => {
    const formData = new FormData(proyectoForm);
    const id = formData.get('id');

    if (!id) {
      showResponse(400, { error: 'Se requiere un ID para actualizar' });
      return;
    }

    const tipoProyecto = {
      codigo: formData.get('codigo'),
      descripcion: formData.get('descripcion'),
      abreviatura: formData.get('abreviatura')
    };

    // Validación de campos vacíos
    if (!tipoProyecto.codigo || !tipoProyecto.descripcion || !tipoProyecto.abreviatura) {
      showResponse(400, { error: 'Todos los campos son obligatorios.' });
      return;
    }

    try {
      responseMessageElement.textContent = '⏳ Cargando...';
      const response = await fetch(`${baseUrl}/${id}`, {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(tipoProyecto)
      });
      const data = await response.json();
      showResponse(response.status, data);
      if (response.ok) {
        proyectoForm.reset();
      }
    } catch (error) {
      showResponse(500, { error: error.message });
    }
  });

  // Eliminar tipo de proyecto (DELETE)
  btnEliminar.addEventListener('click', async () => {
    const id = document.getElementById('id').value;

    if (!id) {
      showResponse(400, { error: 'Se requiere un ID para eliminar' });
      return;
    }

    if (!confirm('¿Está seguro de eliminar este tipo de proyecto?')) return;

    try {
      responseMessageElement.textContent = '⏳ Cargando...';
      const response = await fetch(`${baseUrl}/${id}`, {
        method: 'DELETE'
      });
      const data = await response.json();
      showResponse(response.status, data);
      if (response.ok) {
        proyectoForm.reset();
      }
    } catch (error) {
      showResponse(500, { error: error.message });
    }
  });
});

window.addEventListener("scroll", function () {
  let navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("shrink");
  } else {
    navbar.classList.remove("shrink");
  }
});

$(document).ready(function () {
  // Cerrar el menú hamburguesa después de hacer clic en cualquier enlace
  $('.navbar-nav .nav-link').on('click', function () {
    // Solo cerrar el menú si está abierto
    if ($('.navbar-toggler').attr('aria-expanded') === 'true') {
      $('.navbar-toggler').click();
    }
  });
});

window.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".navbar");
  const formContainer = document.querySelector("#form-container");
  const navbarHeight = navbar.offsetHeight;

  formContainer.style.paddingTop = `${navbarHeight + 20}px`; // +20 para dejar margen
});

