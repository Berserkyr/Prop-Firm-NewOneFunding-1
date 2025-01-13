const FtpDeploy = require('ftp-deploy');
const ftpDeploy = new FtpDeploy();

const config = {
  user: "ton_nom_utilisateur",
  password: "ton_mot_de_passe",
  host: "ftp.ton-domaine.com",
  localRoot: __dirname,
  remoteRoot: "/public_html/",
  include: ["*", "**/*"],
};

ftpDeploy.deploy(config)
  .then(res => console.log('Déploiement réussi :', res))
  .catch(err => console.error(err));
