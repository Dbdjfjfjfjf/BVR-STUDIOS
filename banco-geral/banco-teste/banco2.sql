CREATE TABLE contatos (
    id INT NOT NULL AUTO_INCREMENT,
    nome_completo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    data DATE NOT NULL,
    mensagem TEXT NOT NULL,
    PRIMARY KEY (id)
);