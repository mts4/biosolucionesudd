const user = {
  nameUser: String,
  rutUser: String,
  address: String,
  comuna: String,
  phone: String,
  emailUser: String,
  isPacient: Boolean,
  namePacient: String,
  rutPacient: String,
  typeReclamo: String,
  descriptionReclamo: String,
  reclamoPeticion: String,
  authorize: Boolean,
};

const BASE_PATH = `http://localhost:8888/biosoluciones/wp-content/themes/biosolucionesudd/server/User/save.php`;

export { user, BASE_PATH };
