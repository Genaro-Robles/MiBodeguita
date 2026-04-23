# 🏪 MiBodeguita

**MiBodeguita** es un software web de facturación electrónica diseñado especialmente para tiendas de abarrotes y pequeños negocios en Perú. Permite emitir comprobantes electrónicos de forma rápida, sencilla y cumpliendo con la normativa de SUNAT.

---

## 🚀 Características principales

* 🧾 Emisión de boletas y facturas electrónicas
* ⚡ Interfaz rápida tipo POS (punto de venta)
* 📦 Control básico de inventario
* 📊 Reportes de ventas
* 👥 Gestión de clientes
* 🔐 Sistema multi-tenant (multi-negocio)
* ☁️ Acceso desde cualquier dispositivo
* 🇵🇪 Integración con SUNAT

---

## 🧱 Tecnologías utilizadas

* **Backend:** Laravel 12
* **Frontend:** Livewire + AlpineJS
* **Base de datos:** MySQL
* **Arquitectura:** Multi-tenancy (tenancyforlaravel)
* **Otros:** TailwindCSS, Docker (opcional)

---

## ⚙️ Requisitos

* PHP >= 8.3
* Composer
* Node.js >= 22
* MySQL o MariaDB
* Servidor web (Apache / Nginx)

---

## 📦 Instalación

1. Clonar el repositorio:

```bash
git clone https://github.com/tu-usuario/mibodeguita.git
cd mibodeguita
```

2. Instalar dependencias:

```bash
composer install
npm install
```

3. Configurar variables de entorno:

```bash
cp .env.example .env
php artisan key:generate
```

4. Configurar base de datos en `.env`

```env
DB_DATABASE=mibodeguita
DB_USERNAME=root
DB_PASSWORD=
```

5. Ejecutar migraciones:

```bash
php artisan migrate
```

6. Levantar servidor:

```bash
php artisan serve
npm run dev
```

---

## 🏢 Multi-tenancy

MiBodeguita utiliza arquitectura multi-tenant, lo que permite que múltiples negocios usen el sistema de forma independiente.

* Cada tienda tiene su propia base de datos o esquema
* Separación total de información
* Ideal para SaaS

---

## 🧾 Integración con SUNAT

El sistema está preparado para integrarse con los servicios de SUNAT:

* Envío de comprobantes electrónicos
* Validación de documentos
* Manejo de certificados digitales (.pfx / .p12)

> ⚠️ Nota: Se requiere configuración adicional para entorno de producción.

---

## 📊 Módulos del sistema

* Ventas (POS)
* Compras
* Inventario
* Configuración
* Clientes

---

## 🧪 Testing

```bash
php artisan test
```

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Para cambios importantes:

1. Crear una rama (`feature/nueva-funcionalidad`)
2. Commit de cambios
3. Pull Request

---

## 👨‍💻 Autor
Desarrollado por:
- **Genaro Robles**
- **Diego Kohatsu**
- **Gabriel Pedraza**
- **Saduj Chavez**
