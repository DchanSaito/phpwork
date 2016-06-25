# phpアプリとログサーバをDocker-composeで構築

## 必要な環境
- docker
- docker-compose
- virtualbox

## 環境構築(mac)

`docker-machine ls` でdocker-machineの状態を確認する  
  
問題がなければ、`docker-machine create -d virtualbox logserver`  
  
`docker-machine ls` で確認  
  
`eval "$(docker-machine env logserver)"` としてから `docker-machine ls` でactiveになっているか確認  
  
`docker-compose up -d` で立ち上げる  
  
`docker-machine ip logserver` でipを確認する  
  
ブラウザで `ip:5601` と `ip/` とすれば完了
