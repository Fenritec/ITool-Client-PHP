<?php

namespace FenritecEu\ItoolClientPhp\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\CheckArray;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class V1AdresseEtendueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1AdresseEtendue';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1AdresseEtendue';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1AdresseEtendue();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AdrId', $data)) {
                $object->setAdrId($data['AdrId']);
                unset($data['AdrId']);
            }
            if (\array_key_exists('AdrRaisonSociale', $data)) {
                $object->setAdrRaisonSociale($data['AdrRaisonSociale']);
                unset($data['AdrRaisonSociale']);
            }
            if (\array_key_exists('AdrAdresse', $data)) {
                $object->setAdrAdresse($data['AdrAdresse']);
                unset($data['AdrAdresse']);
            }
            if (\array_key_exists('AdrCodePostal', $data)) {
                $object->setAdrCodePostal($data['AdrCodePostal']);
                unset($data['AdrCodePostal']);
            }
            if (\array_key_exists('AdrLocalite', $data)) {
                $object->setAdrLocalite($data['AdrLocalite']);
                unset($data['AdrLocalite']);
            }
            if (\array_key_exists('AdrPays', $data)) {
                $object->setAdrPays($data['AdrPays']);
                unset($data['AdrPays']);
            }
            if (\array_key_exists('AdrCodePays', $data)) {
                $object->setAdrCodePays($data['AdrCodePays']);
                unset($data['AdrCodePays']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('adrId') && null !== $object->getAdrId()) {
                $data['AdrId'] = $object->getAdrId();
            }
            $data['AdrRaisonSociale'] = $object->getAdrRaisonSociale();
            $data['AdrAdresse'] = $object->getAdrAdresse();
            $data['AdrCodePostal'] = $object->getAdrCodePostal();
            $data['AdrLocalite'] = $object->getAdrLocalite();
            $data['AdrPays'] = $object->getAdrPays();
            $data['AdrCodePays'] = $object->getAdrCodePays();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1AdresseEtendue' => false];
        }
    }
} else {
    class V1AdresseEtendueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1AdresseEtendue';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1AdresseEtendue';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1AdresseEtendue();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AdrId', $data)) {
                $object->setAdrId($data['AdrId']);
                unset($data['AdrId']);
            }
            if (\array_key_exists('AdrRaisonSociale', $data)) {
                $object->setAdrRaisonSociale($data['AdrRaisonSociale']);
                unset($data['AdrRaisonSociale']);
            }
            if (\array_key_exists('AdrAdresse', $data)) {
                $object->setAdrAdresse($data['AdrAdresse']);
                unset($data['AdrAdresse']);
            }
            if (\array_key_exists('AdrCodePostal', $data)) {
                $object->setAdrCodePostal($data['AdrCodePostal']);
                unset($data['AdrCodePostal']);
            }
            if (\array_key_exists('AdrLocalite', $data)) {
                $object->setAdrLocalite($data['AdrLocalite']);
                unset($data['AdrLocalite']);
            }
            if (\array_key_exists('AdrPays', $data)) {
                $object->setAdrPays($data['AdrPays']);
                unset($data['AdrPays']);
            }
            if (\array_key_exists('AdrCodePays', $data)) {
                $object->setAdrCodePays($data['AdrCodePays']);
                unset($data['AdrCodePays']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('adrId') && null !== $object->getAdrId()) {
                $data['AdrId'] = $object->getAdrId();
            }
            $data['AdrRaisonSociale'] = $object->getAdrRaisonSociale();
            $data['AdrAdresse'] = $object->getAdrAdresse();
            $data['AdrCodePostal'] = $object->getAdrCodePostal();
            $data['AdrLocalite'] = $object->getAdrLocalite();
            $data['AdrPays'] = $object->getAdrPays();
            $data['AdrCodePays'] = $object->getAdrCodePays();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1AdresseEtendue' => false];
        }
    }
}