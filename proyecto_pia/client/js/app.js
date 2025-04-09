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
        const response = await fetch(baseUrl);
        const data = await response.json();
        showResponse(response.status, data);
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
  
      try {
        const response = await fetch(baseUrl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(tipoProyecto)
        });
        const data = await response.json();
        showResponse(response.status, data);
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
  
      try {
        const response = await fetch(`${baseUrl}/${id}`, {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(tipoProyecto)
        });
        const data = await response.json();
        showResponse(response.status, data);
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
        const response = await fetch(`${baseUrl}/${id}`, {
          method: 'DELETE'
        });
        const data = await response.json();
        showResponse(response.status, data);
      } catch (error) {
        showResponse(500, { error: error.message });
      }
    });
  });