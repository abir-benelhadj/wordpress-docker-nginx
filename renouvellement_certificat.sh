#!/bin/bash

# === Configuration ===
DOMAIN="bhkbtp.fr"
PORT=443

# === Récupération de la date d'expiration ===
CERT_DATE=$(echo | openssl s_client -servername "$DOMAIN" -connect "$DOMAIN:$PORT" 2>/dev/null \
  | openssl x509 -noout -enddate \
  | cut -d= -f2)

if [ -z "$CERT_DATE" ]; then
  echo "Erreur : impossible de récupérer le certificat pour $DOMAIN"
  exit 1
fi

# === Conversion des dates ===
CERT_EXPIRY_TS=$(date -d "$CERT_DATE" +%Y-%m-%d)
TOMORROW_TS=$(date -d "tomorrow" +%Y-%m-%d)

# === Comparaison ===
if [ "$CERT_EXPIRY_TS" -eq "$TOMORROW_TS" ]; then
  echo "🔔 Le certificat de $DOMAIN expire demain. Renouvellement en cours..."
  docker compose run --rm certbot renew
else
  echo "Le certificat de $DOMAIN expire le : $CERT_EXPIRY_TS"
fi
