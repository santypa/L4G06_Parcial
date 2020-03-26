
SELECT 
producto.id AS ID
,categorias.categoria CATEGORIA
,producto.nombre AS NOMBRE 
,producto.precio_compra AS PRECIO_COMPRA
,producto.precio_venta_iva AS PRECIO_VENTA_IVA
,producto.porcentaje_iva AS IVA  
,estados.estado AS ESTADO


 from producto 
 
 INNER  JOIN categorias ON categorias.id=producto.categoria 
 INNER  JOIN estados ON estados.id=producto.activo
 
  ORDER BY CATEGORIA,nombre
 
 