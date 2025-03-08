# Crud_luis

## Creación del Proyecto

Se inició la aplicación Laravel ejecutando en la terminal:


Durante la instalación se definieron las siguientes configuraciones:

- Se instaló **Breeze** para una autenticación rápida.
- Se optó por usar **vistas Blade** en el frontend.
- Se configuró **PHPUnit** para la ejecución de pruebas.
- Se seleccionó **MySQL** como gestor de base de datos.

---

## Diseño de la Aplicación

El diseño de la interfaz y la experiencia de usuario se realizó en **Figma**.  
Se establecieron los colores, tipografía y estilos para lograr una identidad visual coherente, personalizando elementos como **inputs**, **botones** y **tablas**.

---

## Configuración de la Base de Datos

Se creó la base de datos en **MySQL**. Se aseguró que MySQL estuviera operativo (por ejemplo, mediante **Docker Compose**) o se implementó de forma manual según el entorno.

Para gestionar la información de proyectos se generó el modelo junto a su migración:

```bash
php artisan make:model Proyecto -m
```


Este comando generó:

- El modelo **Proyecto** en `app/Models`.
- Un archivo de migración en `database/migrations` para la tabla de proyectos.

Luego se ejecutaron las migraciones:

```bash
php artisan migrate
```


---

## Creación de los Controladores

Se crearon controladores para gestionar la funcionalidad del sistema:

- **Para proyectos**:  
  Se creó el controlador **ProyectoController**, el cual incluye métodos para **listar**, **crear**, **editar**, **actualizar** y **eliminar** proyectos.

- **Para usuarios**:  
  Se generó el controlador **UsuarioController** (y se configuró el CRUD correspondiente) para administrar a los usuarios de la aplicación.  
  Se implementaron reglas de validación, entre ellas la verificación del campo **“email”** único, para evitar errores en la base de datos.

---

## Internacionalización y Funcionalidades Adicionales

Se configuraron archivos de traducción (idiomas español, inglés y francés) en `resources/lang`, integrando la función `__()` en todas las vistas para una adaptación dinámica al idioma seleccionado.  
Además, se implementó un componente con **AlpineJS** para el cambio de idioma, mostrando un desplegable con las banderas y nombres de los idiomas disponibles.

Por último, se realizaron ajustes en los componentes (como **text-input**, **botones**, **formularios**).

---

## Resumen

El proceso de creación de **Crud_luis** incluyó:

1. La generación de la aplicación Laravel con **Breeze**, **vistas Blade**, **modo oscuro**, **PHPUnit** y **MySQL**.
2. El desarrollo y adaptación de la interfaz en **Figma**, estableciendo una identidad visual coherente.
3. La configuración de la base de datos, la creación del modelo **Proyecto** y la ejecución de migraciones.
4. La creación de controladores para **proyectos** y **usuarios**, implementando la funcionalidad **CRUD** y validaciones pertinentes.
5. La integración de la **internacionalización** para soportar múltiples idiomas.

---